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

Route::get('/Selengkapnya', [DonasiController::class, 'index'] );
Route::get('/Detail', [DonasiController::class, 'DetailDonasi'] );
Route::get('/Tentangkami', [DonasiController::class, 'TentangKami'] );
Route::get('/Category', [DonasiController::class, 'CategoryDonasi'] );

Route::middleware(['guest'])->group(function () {
    Route::get('auth/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('auth/login', [AuthController::class, 'authenticate']);
});

Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::resource('userman', UsermanController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('campaigns', CampaignController::class);
});


Route::middleware(['guest'])->group(function () {
    Route::get('auth/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('auth/login', [AuthController::class, 'authenticate']);
});

Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('userman', UsermanController::class);
});