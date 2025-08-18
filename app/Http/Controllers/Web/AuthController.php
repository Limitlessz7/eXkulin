<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends \App\Http\Controllers\Controller
{
    /**
     * Tampilkan halaman login
     */
    public function login_page()
    {
        return view('auth.login', [
            "title" => "Login Page",
            "active" => 'login'
        ]);
    }

    /**
     * Proses login user
     */
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'usr_email' => 'required|string|email:dns',
            'password' => 'required|string',
        ]);

        // Coba login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // ✅ keamanan session

            return redirect()->intended('dashboard') // ✅ fleksibel redirect
                ->with('success', 'Login berhasil, selamat datang!');
        }

        // Jika gagal
        return back()->withErrors([
            'usr_email' => 'Email atau password tidak sesuai.',
        ])->onlyInput('usr_email');
    }

    /**
     * Proses logout user
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Hapus session lama
        $request->session()->invalidate();

        // Bikin token baru (CSRF aman)
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Anda sudah logout.');
    }
}