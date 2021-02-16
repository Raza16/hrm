<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        Auth::user()->employee_id;

        $task = DB::table('tasks')->select('')->where()->get();

        return view('backend.user_account.task.list', compact(''));
    }
}
