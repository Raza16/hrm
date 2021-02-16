<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class TaskController extends Controller
{
    public function index()
    {
        // $employee_id = Auth::user()->employee_id;

        $task = DB::table('tasks')->select('task_no, priority, assign_date, status')->where('employee_id', 3)->get();

        dd($task);

        // return view('backend.user_account.task.list');
    }
}
