<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function index() {
        return view('Pages.Selengkapnya');
    }

    public function DetailDonasi() {
        return view('Pages.DetailDonasi');
    }
}
