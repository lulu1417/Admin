<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthAdmin
{
    public function handle($request, Closure $next, $guard)
    {
        if(!Auth::guard($guard)->check())
        {
            return redirect('admin/login');
        }
        return $next($request);
    }
}
