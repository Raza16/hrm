<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MultiAuth
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

        if(auth()->user()->is_employee == 1){
            return $next($request);
        }

        return redirect(‘home’)->with(‘error’,"You don't have emplyee rights.");
    }
}
