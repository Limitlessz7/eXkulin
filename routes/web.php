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
    return view('welcome'); // Replace with 'landing' if needed
})->name('landing');

// =====================
// Auth Routes
// =====================
Route::get('/login', [AuthController::class, 'login_page'])->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// =====================
// Authenticated Routes
// =====================
Route::middleware(['auth'])->group(function () {
    
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // User email view
    Route::get('/user/email', function () {
        return view('usr.email');
    })->name('user.email');

    // =====================
    // Extracurricular Routes
    // =====================
    
    // Main index
    Route::get('/eskul', [ExtracurricularController::class, 'index'])->name('extracurricular.index');

    // Show detail
    Route::get('/eskul/{id}', [ExtracurricularController::class, 'show'])->name('extracurricular.show');

    // Show registration form
    Route::get('/eskul/{id}/daftar', [ExtracurricularController::class, 'create'])->name('extracurricular.create');

    // Submit registration form
    Route::post('/eskul/{id}/daftar', [ExtracurricularController::class, 'store'])->name('extracurricular.store');
});

// =====================
// OPTIONAL: Clean aliases if you also use `/extracurriculars` URLs
// =====================
// If you want to keep the `/extracurriculars` version too, you can alias them:
Route::redirect('/extracurriculars', '/eskul')->name('extracurriculars.index');
Route::redirect('/extracurriculars/{id}', '/eskul/{id}');
Route::redirect('/extracurriculars/{id}/create', '/eskul/{id}/daftar');
Route::post('/extracurriculars/{id}', [ExtracurricularController::class, 'store'])->name('extracurriculars.store');
