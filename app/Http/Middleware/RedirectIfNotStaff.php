<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class RedirectIfNotstaff
{
    public function handle($request, Closure $next, $guard = 'staff')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect()->route('user.login');
        }

        return $next($request);
    }
}