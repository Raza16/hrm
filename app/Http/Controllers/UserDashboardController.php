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

        $leaveCount = DB::table('leaves')
        ->where('employee_id', $employee->id)
        ->where('status', 'approved')
        ->whereYear('created_at', date('Y'))
        ->sum('days');

        $completedTaskCount = DB::table('tasks')
        ->where('employee_id', $employee->id)
        ->where('status', 'completed')
        ->count();

        $processTaskCount = DB::table('tasks')
        ->where('employee_id', $employee->id)
        ->where('status', 'process')
        ->count();

        // dd($processTaskCount.$taskCount);

        return view('backend.user_account.dashboard', compact('employee', 'leaveCount', 'completedTaskCount', 'processTaskCount'));
    }


    public function timeTracker()
    {

    }



}
