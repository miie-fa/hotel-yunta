<?php

use App\Http\Controllers\KeranjangPemesanan\KeranjangPemesananController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/keranjang-pemesanan', [KeranjangPemesananController::class, 'keranjangPemesanan']);
Route::get('/user', [UserController::class, 'dashboard'])->name('user-dashboard');
Route::get('/schedule', [UserController::class, 'schedule'])->name('user-schedule');
Route::get('/setting', [UserController::class, 'setting'])->name('user-setting');
