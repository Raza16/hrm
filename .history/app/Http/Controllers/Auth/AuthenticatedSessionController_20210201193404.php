<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        // $request->authenticate();

        // switch(Auth::user()->role_id){
        //     case 1:
        //     $this->redirectTo = '/dashboard';
        //     return $request->authenticate();
        //         break;
            
        //     case 2:
        //         $this->redirectTo = '/user_account';
        //         return $request->authenticate();
        //     break;

        //     default:
        //     $this->redirectTo = '/login';
        //     return $request->authenticate();;
        // }

        if(Auth::check() && Auth::user()->role_id == 1)
        {
            $request->authenticate();
            return redirect('/dashboard');
        }
        elseif(Auth::check() && Auth::user()->role_id == 2)
        {
            $request->authenticate();
            return redirect('/dashboard');
        }
        else{
            $request->authenticate();
            return redirect('/login');
        }

        $request->session()->regenerate();

        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
