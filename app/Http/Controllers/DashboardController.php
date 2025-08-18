<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil user yang login
$user = Auth::user();
        // Jika tidak ada user yang login, redirect ke halaman login
        if (!$user) {
            return redirect()->route('login.page');
        }

        // Kirim ke view
        return view('dashboard', compact('user'));
    }
}
