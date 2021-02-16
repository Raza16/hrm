<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Leave;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        $employee = Auth::user()->employee;




        return view('backend.user_account.dashboard', compact('employee'));
    }


    public function timeTracker()
    {

    }



}
