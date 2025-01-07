<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Category;
use App\Models\Donasi;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $donasi = Campaign::all();
        $penggalangan = Transaksi::where('status', 'completed')->get();
        $category = Category::all();
        $campaign = Campaign::with('category')->orderBy('created_at', 'desc')->limit(4)->get()->map(function ($item) {
            $item->start_date = Carbon::parse($item->start_date);
            $item->end_date = Carbon::parse($item->end_date);
            $item->days_remaining = $item->start_date->diffInDays($item->end_date);
            $item->total_donations = Donasi::where('campaign_id', $item->campaign_id)
                ->where('status', 'completed')->count();

            return $item;
        });
        return view('admin.Dashboard', compact('donasi', 'penggalangan', 'category' ,'campaign'));
    }
}
