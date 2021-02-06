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
        switch(Auth::user()->role){
            case 'admin':
            $this->redirectTo = '/dashboard';
            return $this->redirectTo;
                break;
            
            case 'voter':
                $this->redirectTo = '/welcome';
                return $this->redirectTo;
            break;

            default:
            $this->redirectTo = '/login';
            return $this->redirectTo;
        }

        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
