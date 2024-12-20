<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Campaign;
use App\Models\Category;
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

                return $item;
            });


        return view('Pages.DetailDonasi', compact('campaign', 'campaigns'));
    }


    public function TentangKami()
    {
        return view('Pages.TentangKami');
    }

    public function CategoryDonasi($id)
    {
        $category = Category::find($id);
        $campaign = $category->campaigns;
        return view('Pages.CategoryDonasi', compact('category', 'campaign'));
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
            return view ('Pages.Profile', compact('transaction'));
        }
        return view('Pages.DetailPayment', compact('transaction'));
    }
}
