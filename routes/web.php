<?php

use App\Http\Controllers\DonasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UsermanController;

Route::get('/', function () {
    return view('index');
});

Route::get('/selengakapnya', [DonasiController::class, 'index'] );
Route::get('/detail', [DonasiController::class, 'DetailDonasi'] );
Route::get('/tentang-kami', [DonasiController::class, 'TentangKami'] );
Route::get('/category', [DonasiController::class, 'CategoryDonasi'] );

Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::resource('userman', UsermanController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('campaigns', CampaignController::class);
});

Route::middleware(['guest'])->group(function () {
    Route::get('auth/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('auth/login', [AuthController::class, 'authenticate']);
});