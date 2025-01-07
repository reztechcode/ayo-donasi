<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Donasi;
use App\Models\Campaign;
use App\Models\Category;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        $donasi = Campaign::all();
        $totalDonatur = Transaksi::where('status', 'completed')->count();
        $category = Category::all();
        $campaign = Campaign::with('category')->orderBy('created_at', 'desc')->limit(4)->get()->map(function ($item) {
            $item->start_date = Carbon::parse($item->start_date);
            $item->end_date = Carbon::parse($item->end_date);
            $item->days_remaining = $item->start_date->diffInDays($item->end_date);
            $item->total_donations = Donasi::where('campaign_id', $item->campaign_id)
                ->where('status', 'completed')->count();

            return $item;
        });
        return view('admin.Dashboard', compact('donasi', 'totalDonatur', 'category', 'campaign'));
    }

    public function campaignStats()
    {
        $totalDonations = DB::table('campaigns')->sum('collected_amount');
        $highestDonation = DB::table('campaigns')->orderByDesc('collected_amount')->first();
        $lowestDonation = DB::table('campaigns')->orderBy('collected_amount')->first();
        $campaignProgress = DB::table('campaigns')
            ->select(
                'title',
                'collected_amount',
                'target_amount',
                DB::raw('ROUND((collected_amount / target_amount) * 100, 2) as progress_percentage')
            )
            ->get();
        $activeCampaigns = DB::table('campaigns')->where('status', true)->count();
        $inactiveCampaigns = DB::table('campaigns')->where('status', false)->count();

        return response()->json([
            'total_donations' => $totalDonations,
            'highest_donation' => $highestDonation,
            'lowest_donation' => $lowestDonation,
            'campaign_progress' => $campaignProgress,
            'active_campaigns' => $activeCampaigns,
            'inactive_campaigns' => $inactiveCampaigns,
        ]);
    }
}
