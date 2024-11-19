<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Mengecek apakah pengguna sudah login dan memiliki peran admin
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        // Jika pengguna bukan admin, redirect ke halaman lain atau tampilkan pesan
        return redirect()->route('homepage')->with('error', 'You do not have admin access.');
    }
}
