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
        $userId =  Auth::User()->id;

        $roleId = DB::table('role_user')->where('user_id', $userId)->select('role_id')->first();

        if(auth()->user()->$roleId == '1'){

            return redirect('/user_account');
            // return redirect(‘home’)->with(‘error’,"You don't have emplyee rights.");
        }
        
        return $next($request);
    }
}
