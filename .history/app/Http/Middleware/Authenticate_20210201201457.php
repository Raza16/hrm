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
        if (Auth::attempt(['email' => $email, 'password' => $password, 'role_id' => 1])) {
            return $this->redirectTo = '/dashboard';
        }

        if (Auth::attempt(['email' => $email, 'password' => $password, 'role_id' => 2])) {
            return  $this->redirectTo = '/user_account';
        }
        

        

        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
