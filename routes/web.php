<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\RoleController;
use App\Models\Extracurricular;

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
    // Route::get('/eskul/show', [ExtracurricularController::class, 'show'])->name('extracurricular.show');

    // Show registration form
    Route::get('/eskul/{id}/daftar', [ExtracurricularController::class, 'create'])->name('extracurricular.create');

    // Submit registration form
    Route::post('/eskul/{id}/daftar', [ExtracurricularController::class, 'store'])->name('extracurricular.store');
});

// =====================
// OPTIONAL: Clean aliases if you also use `/extracurriculars` URLs
// =====================
// If you want to keep the `/extracurriculars` version too, you can alias them:
// Route::redirect('/extracurriculars', '/eskul')->name('extracurriculars.index');
// Route::redirect('/extracurriculars/{id}', '/eskul/{id}');
// Route::redirect('/extracurriculars/{id}/create', '/eskul/{id}/daftar');
// Route::post('/extracurriculars/{id}', [ExtracurricularController::class, 'store'])->name('extracurriculars.store');


// kelola ekskul
Route::get('/extracurriculars/manage-extracurricular', [ExtracurricularController::class, 'index']);
Route::get('/extracurriculars/manage-extracurricular/create-extracurricular', [ExtracurricularController::class, 'createEkskul']);
Route::post('/extracurriculars/manage-extracurricular', [ExtracurricularController::class, 'storeEkskul']);
Route::delete('/extracurriculars/manage-extracurricular/{extracurricular}',[ExtracurricularController::class, 'delete']);


// Kelola akun
Route::get('/accounts/manage-account',[AccountController::class, 'index']);
Route::get('/accounts/manage-account/create-account',[AccountController::class, 'create']);
Route::post('/accounts/manage-account',[AccountController::class, 'store']);
Route::get('/accounts/manage-account/{user}/edit',[AccountController::class, 'edit']);
Route::put('/accounts/manage-account/{user}',[AccountController::class, 'update']);
Route::delete('/accounts/manage-account/{user}',[AccountController::class, 'delete']);
Route::get('/accounts/list-account', [AccountController::class, 'show']);

// kelola role
Route::get('/accounts/manage-role', [RoleController::class, 'index']);
Route::delete('/accounts/manage-role/{role}',[RoleController::class, 'delete']);
// kelola kelas
Route::get('/class/manage', function () {
    return view('classfitur.manage');
});
// eksul view
Route::get('/extracurricular/view', function (Extracurricular $extracurricular) {
    $eskul = Extracurricular::all();
    return view('extracurriculars.views', compact('eskul'));
});
// major manage
Route::get('/major/manage', function () {
    return view('major.manage');
});
// major view
Route::get('/major/view', function () {
    return view('major.view');      
});
// membership manage
Route::get('/membership/manage', function () {
    return view('membership.manage-membership');
});
// membership view
Route::get('/membership/view', function () {
    return view('membership.view-members');
});
// manage application
Route::get('/manage-application/manage', function () {
    return view('manage-application.manage');
});
// accept history
Route::get('/manage-application/accept-history', function () {
    return view('manage-application.accept-history');
});
// reject history
Route::get('/manage-application/reject-history', function () {
    return view('manage-application.reject-history');       
});