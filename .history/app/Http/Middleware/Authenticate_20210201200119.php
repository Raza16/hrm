<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if(Auth::check() && Auth::user()->role_id == 1)
            {
                // $request->authenticate();
                return redirect('/dashboard');
            }
            elseif(Auth::check() && Auth::user()->role_id == 2)
            {
                // $request->authenticate();
                return redirect('/user_account');
            }
            else{
                // $request->authenticate();
                return redirect('/login');
            }

        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
