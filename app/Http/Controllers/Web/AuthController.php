<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_page()
    {
        return view('auth.login', [
            "title" => "Login page",
            "active" => 'login'
        ]);
    }

    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'usr_email' => 'required|email',
            'usr_password' => 'required'
        ]);

        // Sesuaikan key ke Auth
        $attempt = [
            'usr_email' => $credentials['usr_email'],
            'password' => $credentials['usr_password'], // <- wajib pakai 'password'
        ];

        if (Auth::attempt($attempt)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'usr_email' => 'Email atau password salah.',
        ])->onlyInput('usr_email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
