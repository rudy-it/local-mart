<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekUser
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if ($user && $user->level !== 'admin') {
            return redirect('/');
        }
        return $next($request);
    }
}
