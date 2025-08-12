<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
   
});
 route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard_page'])->name('dashboard');
