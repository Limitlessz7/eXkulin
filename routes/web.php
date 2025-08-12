<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController; // <-- Make sure this is included

// Home route
Route::get('/', function () {
    return view('welcome');
});

// Dashboard route
Route::get('/dashboard', [DashboardController::class, 'dashboard_page'])->name('dashboard');
