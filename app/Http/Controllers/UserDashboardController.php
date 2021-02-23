<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Leave;
use App\Models\Task;
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

        $todayTasks = Task::where(['employee_id' => $employee->id, 'assign_date' => date("Y-m-d")])->get();

        return view('backend.user_account.dashboard', compact(
            'employee',
            'leaveCount',
            'completedTaskCount',
            'processTaskCount',
            'todayTasks'
        ));
    }


    public function timeTracker()
    {

    }



}
