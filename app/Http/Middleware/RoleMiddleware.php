<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Menentukan apakah user memiliki role yang diizinkan.
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Kalau belum login, arahkan ke halaman login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Ambil role user yang sedang login
        $userRole = Auth::user()->role;

        // Kalau role tidak termasuk yang diizinkan, tolak akses
        if (!in_array($userRole, $roles, true)) {
            abort(403, 'Anda tidak memiliki izin untuk mengakses halaman ini.');
        }

        return $next($request);
    }
}