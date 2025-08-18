<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\DashboardController;

// Halaman welcome
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Login routes
Route::get('/login', [AuthController::class, 'login_page'])
    ->name('login')
    ->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.post')
    ->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');

// Dashboard (hanya untuk user yang login)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard_page'])
        ->name('dashboard');
});
