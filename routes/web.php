<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/frontend', function () {
    return view('frontend.frontend');
});
