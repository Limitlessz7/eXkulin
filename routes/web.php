<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExtracurricularController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Landing page
Route::get('/', function () {
    return view('welcome'); // ganti dengan landing kalau ada
})->name('landing');

// Auth
Route::get('/login', [AuthController::class, 'login_page'])->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// User email view, harus login dulu
Route::get('/user/email', function () {
    return view('user.email');
})->middleware('auth')->name('user.email');

// Dashboard dan fitur lain yang butuh login
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Fitur eskul (extracurricular)
    Route::get('/eskul', [ExtracurricularController::class, 'index'])->name('extracurricular.index');
    Route::get('/eskul/{id}', [ExtracurricularController::class, 'show'])->name('extracurricular.show');

    // Fitur daftar eskul, hanya siswa (bisa tambah middleware khusus nanti)
    Route::get('/eskul/{id}/daftar', [ExtracurricularController::class, 'create'])->name('extracurricular.create');
    Route::post('/eskul/{id}/daftar', [ExtracurricularController::class, 'store'])->name('extracurricular.store');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/eskul', [ExtracurricularController::class, 'index'])->name('extracurricular.index');
    Route::get('/eskul/{id}', [ExtracurricularController::class, 'show'])->name('extracurricular.show');

    // Hanya siswa yang bisa daftar eskul (nanti bisa dipisah middleware)
    Route::get('/eskul/{id}/daftar', [ExtracurricularController::class, 'create'])->name('extracurricular.create');
    Route::post('/eskul/{id}/daftar', [ExtracurricularController::class, 'store'])->name('extracurricular.store');
});
// Tambah route lain sesuai kebutuhan
