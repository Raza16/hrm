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
        ->select('id','task_no', 'priority', 'assign_date', 'status', 'note')
        ->where('employee_id', '=', $employee_id)
        ->groupBy('id', 'task_no', 'priority', 'assign_date', 'status', 'note')
        ->get();

        // dd($tasks);

        return view('backend.user_account.task.list', compact('tasks'));
    }

    public function edit($id)
    {
        
    }




}
