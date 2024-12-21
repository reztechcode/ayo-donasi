<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Category;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $donasi = Campaign::all();
        $penggalangan = Transaksi::where('status', 'completed')->get();
        $category = Category::all();

        return view('admin.Dashboard', compact('donasi', 'penggalangan', 'category'));
    }
}
