<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use DB;

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
        $user =  Auth::User()->id;

        $roleId = DB::table('role_user')->where('user_id', '')

        if(auth()->user()-> == 1){

            return $next($request);
        }

        return redirect(‘home’)->with(‘error’,"You don't have emplyee rights.");
    }
}
