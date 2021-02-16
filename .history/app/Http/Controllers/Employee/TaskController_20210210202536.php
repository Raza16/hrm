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
        ->where('employee_id', $employee_id)
        ->select('task_no, priority, assign_date, status')
        ->groupBy('task_no, priority, assign_date, status')->get();

        return view('backend.user_account.task.list', compact('tasks'));
    }
}
