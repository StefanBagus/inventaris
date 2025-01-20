<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckSession
{
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah ada sesi 'user' yang valid
        if (!session()->has('user')) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}

