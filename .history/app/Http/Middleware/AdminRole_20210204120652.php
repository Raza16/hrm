<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);

        if (!Auth::check()) {
            return redirect('/login');
        }

        if (Auth::user()->role_id == 1) {
            return $next($request);
        }
        
        if (Auth::user()->role_id == 2) {
            return redirect('/user_account');
        }
    }
}
