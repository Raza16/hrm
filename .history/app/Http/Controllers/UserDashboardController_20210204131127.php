<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        return view('user_account.dashboard');
    }
}
