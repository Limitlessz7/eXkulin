<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

// 👇 PAKAI middleware dari App\Http\Middleware, bukan Illuminate
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;

// Welcome page → public
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Login → hanya untuk guest (belum login)
Route::get('/login', [AuthController::class, 'login_page'])
    ->name('login')
    ->middleware(RedirectIfAuthenticated::class);

Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Logout → hanya untuk user login
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware(Authenticate::class);

// Dashboard → hanya untuk user login
Route::middleware([Authenticate::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard_page'])->name('dashboard');
});

// Other routes can be added here as needed
