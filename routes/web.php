<?php

use App\Http\Controllers\DonasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UsermanController;
use App\Models\Transaksi;

Route::get('/', [DonasiController::class, 'Index'] );
Route::get('/selengkapnya', [DonasiController::class, 'Selengkapnya'] );
Route::get('/tentang-kami', [DonasiController::class, 'TentangKami'] );
Route::get('/category/{id}', [DonasiController::class, 'CategoryDonasi'] );
Route::get('/profile', [DonasiController::class, 'ProfileDonasi'] );

    // Donasi
Route::get('/donasi/{slug}/detail', [DonasiController::class, 'DetailDonasi'] );
Route::get('donasi/payment/{id}', [DonasiController::class, 'DetailPayment']);

Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::resource('userman', UsermanController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('campaigns', CampaignController::class);
});

    // Proses Donasi
Route::post('donasi/payment', [TransaksiController::class, 'berDonasi']);
Route::post('/donasi/payment/callback', [TransaksiController::class, 'handleCallback']);

// Route::get('donasi/payment/{id}', [TransaksiController::class, 'detailTransaksi']);


Route::middleware(['guest'])->group(function () {
    Route::get('auth/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('auth/login', [AuthController::class, 'authenticate']);
});