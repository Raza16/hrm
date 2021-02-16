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

        // dd(date('Y'));

        $leaveCount = DB::table('leaves')
            ->where([
            ['employee_id', $employee->id],
            ['status', 'approved'],
            // ['created_at', date('Y')],
            ])
            ->whereDate('from_date', $employee->from_date)
            ->whereDate('to_date', $employee->to_date)
            ->whereYear('created_at', date('Y'))
            ->count();
            dd($leaveCount);

        return view('backend.user_account.dashboard', compact('employee', 'leaveCount'));
    }


    public function timeTracker()
    {

    }



}
