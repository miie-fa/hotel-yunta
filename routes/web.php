<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/roomdetails', function () {
    return view('roomdetails');
});

Route::get('/contact', function () {
    return view('contact');
});
