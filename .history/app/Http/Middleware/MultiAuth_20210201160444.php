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
        // $userId =  Auth::User()->id;

        // $roleId = DB::table('role_user')->where('user_id', $userId)->select('role_id')->first();

        if(auth()->user()->role_id == '1'){

            return redirect('/dashboard');
            // return redirect(‘home’)->with(‘error’,"You don't have emplyee rights.");
        }
        else{
            return redirect('/user_account');
        }
        
        return $next($request);
    }
}
