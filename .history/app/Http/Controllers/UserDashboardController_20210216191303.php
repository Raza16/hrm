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

        $leave = DB::table('leaves')->select('from_date', 'to_date')->where('employee_id', $employee->id)->first();


        $leaveCount = DB::table('leaves')
            ->where([
            ['employee_id', $employee->id],
            ['status', 'approved'],
            ])
            ->whereBetween('from_date', [$leave->from_date, $leave->to_date])
            // ->whereDate('from_date', $leave->from_date)
            // ->whereDate('to_date', $leave->to_date)
            ->whereYear('created_at', date('Y'))
            ->groupBy('employee_id')
            ->count();

            dd($leaveCount);

        return view('backend.user_account.dashboard', compact('employee', 'leaveCount'));
    }


    public function timeTracker()
    {

    }



}
