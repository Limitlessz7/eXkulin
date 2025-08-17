<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle(Request $request, Closure $next)
    {
        // Kalau user belum login → lempar ke halaman login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Kalau sudah login → lanjut request berikutnya (misalnya buka dashboard)
        return $next($request);
    }
}
