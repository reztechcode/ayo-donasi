<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Campaign;
use App\Models\Category;
use App\Models\Donasi;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $campaign = Campaign::all()->map(function ($item) {
            $item->start_date = Carbon::parse($item->start_date);
            $item->end_date = Carbon::parse($item->end_date);

            // diffInDays menghitung selisih dalam hari antara dua tanggal.
            $item->days_remaining = $item->start_date->diffInDays($item->end_date);
            $item->total_donations = Donasi::where('campaign_id', $item->campaign_id)
                ->where('status', 'completed')->count();

            return $item;
        });

        return view('index', compact('campaign', 'category'));
    }

    public function Selengkapnya()
    {
        $campaign = Campaign::all()->map(function ($item) {
            $item->start_date = Carbon::parse($item->start_date);
            $item->end_date = Carbon::parse($item->end_date);

            // diffInDays menghitung selisih dalam hari antara dua tanggal.
            $item->days_remaining = $item->start_date->diffInDays($item->end_date);
            $item->progress = $item->target_amount > 0 ? ($item->collected_amount / $item->target_amount) * 100 : 0;
            $item->total_donations = Donasi::where('campaign_id', $item->campaign_id)
                ->where('status', 'completed')->count();
            $item->total_donations = Donasi::where('campaign_id', $item->campaign_id)
                ->where('status', 'completed')->count();
            return $item;
        });

        $search = request()->input('q');
        if ($search) {
            $users = Campaign::where('title', 'like', '%' . $search . '%')
                ->orWhere('campaign_id', 'like', '%' . $search . '%')
                ->paginate(20);
        } else {
            $users = Campaign::paginate(20);
        }
        return view('Pages.Selengkapnya',  compact('campaign', 'search'));
    }

    public function DetailDonasi($slug)
    {
        $campaign = Campaign::where('slug', $slug)->firstOrFail();

        $campaign->start_date = Carbon::parse($campaign->start_date);
        $campaign->end_date = Carbon::parse($campaign->end_date);

        $campaign->days_remaining = $campaign->start_date->diffInDays($campaign->end_date);
        $campaign->progress = $campaign->target_amount > 0
            ? ($campaign->collected_amount / $campaign->target_amount) * 100
            : 0;
        $campaign->total_donations = Donasi::where('campaign_id', $campaign->campaign_id)
            ->where('status', 'completed')->count();

        $donatur = $campaign->donatur = Donasi::where('campaign_id', $campaign->campaign_id)
            ->where('status', 'completed')
            ->with('user')
            ->paginate(5) // Tampilkan 10 data per halaman
            ->through(function ($donasi) {
                $donasi->days_ago = Carbon::parse($donasi->created_at)->diffInDays(Carbon::now());
                return $donasi;
            });

        $campaigns = Campaign::orderBy('created_at', 'desc')
            ->take(3)
            ->get()
            ->map(function ($item) {
                $item->start_date = Carbon::parse($item->start_date);
                $item->end_date = Carbon::parse($item->end_date);

                // Menghitung selisih hari
                $item->days_remaining = $item->start_date->diffInDays($item->end_date);

                // Menghitung progres donasi
                $item->progress = $item->target_amount > 0 ? ($item->collected_amount / $item->target_amount) * 100 : 0;
                $item->total_donations = Donasi::where('campaign_id', $item->campaign_id)
                    ->where('status', 'completed')->count();
                return $item;
            });


        return view('Pages.DetailDonasi', compact('campaign', 'campaigns', 'donatur'));
    }


    public function TentangKami()
    {
        return view('Pages.TentangKami');
    }

    public function CategoryDonasi($id)
    {
        $category = Category::find($id);

        // Pastikan category ditemukan
        if (!$category) {
            return redirect()->back()->with('error', 'Kategori tidak ditemukan.');
        }

        $campaigns = $category->campaigns->map(function ($item) {
            $item->start_date = Carbon::parse($item->start_date);
            $item->end_date = Carbon::parse($item->end_date);
            $item->days_remaining = $item->start_date->diffInDays($item->end_date);
            $item->progress = $item->target_amount > 0
                ? round(($item->collected_amount / $item->target_amount) * 100, 2)
                : 0;

            $item->total_donations = Donasi::where('campaign_id', $item->campaign_id)
                ->where('status', 'completed')
                ->count();

            return $item;
        });

        return view('Pages.CategoryDonasi', compact('category', 'campaigns'));
    }

    public function ProfileDonasi()
    {
        return view('Pages.Profile');
    }
    public function DetailPayment($id)
    {
        $transaction = Transaksi::with('donation')->with('user')->find($id);
        // return response()->json($transaction);
        if ($transaction->status == 'completed') {
            return view('Pages.Feedback', compact('transaction'));
        }
        return view('Pages.DetailPayment', compact('transaction'));
    }

    public function HistoryDonasi()
    {
        return view('Pages.HistoryProfile');
    }

    // public function showShare()
    // {
    //     $item = Model::findOrFail($id);

    //     $url = route('detail', ['id' => $item->id]);
    //     $text = "Lihat konten menarik ini!";
    //     $subject = "Bagikan Konten Menarik";

    //     return view('detail', compact('item', 'url', 'text', 'subject'));
    // }
}
