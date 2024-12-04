<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home');
});

// Services Page
Route::get('/services', function () {
    return view('layanan.service');
});

// Portfolio Page
Route::get('/portfolio', function () {
    return view('portofolio.portofolio');
});

// Contact Page
Route::get('/contact', function () {
    return view('contact.contact');
});

// Booking Page (Optional, for future)
Route::get('/booking', function () {
    return view('booking');
});
