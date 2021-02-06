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
        $isAuthenticatedEmployee = (Auth::check() && Auth::user()->role_id == 1);
  
  	//This will be excecuted if the new authentication fails.
	if (! $isAuthenticatedEmployee)
		return redirect('/login')->with('message', 'Authentication Error.');
	return $next($request);
    }
}
