<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use App\Models\Donasi;
use App\Models\Campaign;
use App\Models\Transaksi;
use Illuminate\Http\Request;
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
        ]);
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
                    "name" => "Donasi- " . $campaign->name,
                    "quantity" => 1,
                    "price" => $transaksi->gross_amount,
                ]
            ),
            'customer_details' => [
                'first_name' => 'Guest',
                'email' => null,
                'phone' => null,
                // 'first_name' => Auth::user()->name,
                // 'email' => Auth::user()->email,
                // 'phone' => Auth::user()->phone ?? null,
            ],
            // 'finish_redirect_url' => 'http://localhost:8000/finish'
        ];

        $snapToken = [
            'snap_token' => Snap::getSnapToken($params)
        ];
        $transaksi = Transaksi::find($transaksi->transaction_id);
        $transaksi->snap_token = $snapToken['snap_token'];
        $transaksi->save();
        return response()->json($snapToken);
    }

    public function detailTransaksi($id){
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
        $transaction = Transaksi::where('midtrans_order_id', $orderId)->first();
        $donation = Donasi::find($transaction->donation_id);
        if (!$transaction) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        // Perbarui status transaksi berdasarkan notifikasi
        if ($transactionStatus === 'capture' || $transactionStatus === 'settlement') {
            $transaction->status = 'completed';
            $donation->status = 'completed';
        } elseif ($transactionStatus === 'pending') {
            $transaction->status = 'pending';
            $donation->status = 'pending';
        } elseif ($transactionStatus === 'deny' || $transactionStatus === 'cancel' || $transactionStatus === 'expire') {
            $transaction->status = 'failed';
            $donation->status = 'failed';
        }
        $transaction->save();
        $donation->save();

        return response()->json(['message' => 'Callback received successfully']);
    }
}
