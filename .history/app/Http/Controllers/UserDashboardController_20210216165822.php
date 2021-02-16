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

        $leaveCount = DB::table('leaves')->where([
            ['employee_id', $employee->id],
            ['status', 'approved']])
            ->count();
        // dd($leaveCount);

        return view('backend.user_account.dashboard', compact('employee', 'leaveCount'));
    }


    public function timeTracker()
    {

    }



}
