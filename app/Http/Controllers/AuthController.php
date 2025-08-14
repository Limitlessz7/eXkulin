<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login_page()
    {
        return view('auth.login',  ["title" => "Login page"]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

       if (Auth::attempt($request->only('email', 'password'))) {
    return redirect()->route('dashboard')->with('success', 'Login successful.');
}

        return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }

    public function logout()
    {
Auth::logout();
        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}