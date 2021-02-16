<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Leave;
use DB;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        $employee = Auth::user()->employee;

        $leaveCount = DB::table('leaves')->where('employee_id', $employee->id)->count();
        // dd($leaveCount);


        return view('backend.user_account.dashboard', compact('employee'));
    }


    public function timeTracker()
    {

    }



}
