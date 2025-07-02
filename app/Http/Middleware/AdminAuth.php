<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuth
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('admin')->check()) {
            // Menampilkan halaman dengan alert, tanpa redirect
            return response()->view('errors.forbidden', [], 403);
        }

        return $next($request);
    }
}
