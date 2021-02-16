<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $employee_id = Auth::user()->employee_id;

        $task = DB::table('tasks')->select('task_no, assign_date,status')->where('employee_id', $employee_id)->get();

        return view('backend.user_account.task.list', compact(''));
    }
}
