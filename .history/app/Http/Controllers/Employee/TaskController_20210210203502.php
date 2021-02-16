<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;

class TaskController extends Controller
{
    public function index()
    {
        $employee_id = Auth::user()->employee_id;
        // dd($employee_id);

        $tasks = DB::table('tasks')
        ->select('task_no', 'priority', 'assign_date', 'status')
        ->where('employee_id', '=', $employee_id)
        ->groupBy('task_no', 'priority', 'assign_date', 'status')
        ->get();

        dd($tasks);

        return view('backend.user_account.task.list', compact('tasks'));
    }
}
