<?php

use App\Http\Controllers\Project\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/frontend', function () {
    return view('frontend.frontend');
});

Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');