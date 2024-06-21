<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\BokingController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('bookings', BokingController::class);

// menampilkan serching
Route::get('/rooms/search', [RoomsController::class, 'search'])->name('rooms.search');
