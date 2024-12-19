<?php

use App\Http\Controllers\DonasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/Selengkapnya', [DonasiController::class, 'index'] );
