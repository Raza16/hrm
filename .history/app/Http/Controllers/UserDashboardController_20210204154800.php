<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        $employee = Auth::user()->employee;
        return view('backend.user_account.dashboard');
    }
}
