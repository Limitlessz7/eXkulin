<?php

namespace App\Http\Controllers;

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
        $credentials = $request->validate([
            'email' => 'required|string|email:dns',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // ✅ keamanan
            return redirect()->intended('dashboard') // ✅ fleksibilitas redirect
                ->with('success', 'Login successful.'); // ✅ user-friendly
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();   // hapus session lama
        $request->session()->regenerateToken(); // regenerate CSRF token

        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}
