<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Logout
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
        // return $next($request);
        // $response = $next($request);
        // return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')
        //     ->header('Pragma','no-cache')
        //     ->header('Expires','Sun, 02 Jan 1990 00:00:00 GMT');



            $response = $next($request);

            $response->headers->set('Cache-Control','nocache, no-store, max-age=0, must-revalidate');
            $response->headers->set('Pragma','no-cache');
            $response->headers->set('Expires','Sun, 02 Jan 1990 00:00:00 GMT');

            return $response;
    }
}
