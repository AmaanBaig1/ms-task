<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnauthenticUser
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            return redirect('/jobs');
        }

        return $next($request);
    }
}
