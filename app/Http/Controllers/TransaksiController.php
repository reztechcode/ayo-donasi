<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use App\Models\Donasi;
use App\Models\Campaign;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Midtrans\Config as MidtransConf;

use function Pest\Laravel\json;

class TransaksiController extends Controller
{
    public function __construct()
    {
        MidtransConf::$serverKey = config('midtrans.server_key');
        MidtransConf::$isProduction = config('midtrans.is_production');
        MidtransConf::$isSanitized = config('midtrans.is_sanitized');
        MidtransConf::$is3ds = config('midtrans.is_3ds');
        MidtransConf::$overrideNotifUrl = config('midtrans.callback_url');
    }

    public function berDonasi(Request $request)
    {
        $validatedData = $request->validate([
            'campaign_id' => 'required|exists:campaigns,campaign_id',
            'message' => 'nullable|string|max:200',
            'amount' => 'required|numeric',
            'show_name' => 'nullable|string|in:on,off',
        ]);

        if(Auth::check()){
            $user = Auth::user();
            $validatedData['user_id'] = $user->user_id;
        }
        $validatedData['show_name'] = $request->input('show_name') === 'on' ? 1 : 0;
        $donation = Donasi::create($validatedData);
        $transaksi = Transaksi::create([
            'donation_id' => $donation->donation_id,
            'midtrans_order_id' => 'ORD-' . random_int(10000, 99999),
            'gross_amount' => $donation->amount,
        ]);
        $campaign = Campaign::find($request->campaign_id);
        $params = [
            'transaction_details' => [
                'order_id' => $transaksi->midtrans_order_id, // Unique order id
                'gross_amount' => $transaksi->gross_amount, // Total harga
            ],
            "item_details" => array(
                [
                    "id" => uniqid(),
                    "name" => "Donasi- " . $campaign->title,
                    "quantity" => 1,
                    "price" => $donation->amount,
                ]
            ),
            'customer_details' => [
                'first_name' => Auth::user()->name ?? 'Guest',
                'email' => Auth::user()->email ?? null,
                'phone' => Auth::user()->phone ?? null,
            ],
        ];

        $snapToken = [
            'snap_token' => Snap::getSnapToken($params)
        ];
        $transaksi = Transaksi::find($transaksi->transaction_id);
        $transaksi->snap_token = $snapToken['snap_token'];
        $transaksi->save();
        return redirect()->to('donasi/payment/' . $transaksi->transaction_id);
    }

    public function detailTransaksi($id)
    {
        $trasaction = Transaksi::with('donation')->find($id);
        return response()->json($trasaction);
    }
    public function handleCallback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashedKey = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashedKey !== $request->signature_key) {
            return response()->json(['message' => 'Invalid signature key'], 403);
        }

        $transactionStatus = $request->transaction_status;
        $orderId = $request->order_id;

        // Temukan transaksi berdasarkan `order_id`
        $transaction = Transaksi::where('midtrans_order_id', $orderId)->first();

        if (!$transaction) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        // Temukan donasi yang terkait dengan transaksi
        $donation = Donasi::find($transaction->donation_id);

        if (!$donation) {
            return response()->json(['message' => 'Donation not found'], 404);
        }

        // Perbarui status transaksi dan donasi berdasarkan notifikasi
        if ($transactionStatus === 'capture' || $transactionStatus === 'settlement') {
            $transaction->status = 'completed';
            $donation->status = 'completed';
        } elseif ($transactionStatus === 'pending') {
            $transaction->status = 'pending';
            $donation->status = 'pending';
        } elseif (in_array($transactionStatus, ['deny', 'cancel', 'expire'])) {
            $transaction->status = 'failed';
            $donation->status = 'failed';
        }

        $transaction->save();
        $donation->save();
        $campaign = Campaign::find($donation->campaign_id);

        if ($campaign) {
            $collectedAmount = Donasi::where('campaign_id', $campaign->campaign_id)
                ->where('status', 'completed')
                ->sum('amount');

            $campaign->collected_amount = $collectedAmount;
            $campaign->save();
        }

        return response()->json(['message' => 'Callback received successfully']);
    }
}


