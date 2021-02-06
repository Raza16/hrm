<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Is_employee
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
        if(auth()->user()->role_id == 2){
            return redirect('/user_account');
        }
        return $next($request);
        // return $next($request);
    }
}
