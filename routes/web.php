<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home.Home');
});


Route::get('/about', function () {
    return view('About.About');
});

Route::get('/server', function () {
    return view('Server.Server');
});

Route::get('/contact', function () {
    return view('Contact.Contact');
});