<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// =======================
// LANDING PAGE
// =======================
Route::get('/', function () {
    return view('welcome'); // ganti ke 'landing' kalau nanti bikin landing.blade.php
})->name('landing');

// =======================
// AUTH
// =======================
Route::get('/login', [AuthController::class, 'login_page'])->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/user/email', function () {
    return view('user.email');
})->middleware('auth')->name('user.email');

// =======================
// DASHBOARD
// =======================
Route::middleware(['auth'])->group(function () {
    // Dashboard utama
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Tambahkan route lain yang hanya bisa diakses setelah login di sini
    // contoh:
    // Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});
