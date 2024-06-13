<?php

use App\Http\Controllers\KeranjangPemesanan\KeranjangPemesananController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/keranjang-pemesanan', [KeranjangPemesananController::class, 'keranjangPemesanan']);
