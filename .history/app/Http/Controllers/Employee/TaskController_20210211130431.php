<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Task;
use DB;

class TaskController extends Controller
{
    public function index()
    {
        $employee_id = Auth::user()->employee_id;
        // dd($employee_id);

        $tasks = DB::table('tasks')
        ->select('id','task_no', 'priority', 'assign_date', 'status', 'note', 'document')
        ->where('employee_id', '=', $employee_id)
        ->groupBy('id', 'task_no', 'priority', 'assign_date', 'status', 'note', 'document')
        ->get();

        // dd($tasks);

        return view('backend.user_account.task.list', compact('tasks'));
    }

    public function edit($id)
    {
        $taskStatus = DB::table('tasks')->select('id', 'status')->where('id', $id)->first();
        // dd($taskStatus);

        $task = Task::find($id);

        return view('backend.user_account.task.edit', compact('task', 'taskStatus'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'status' => 'required',
        ]);

        $task = Task::find($id);

        $task->status = $request->status;

        $task->save();

        return redirect('employee-task');
    }

    public function getDownload($id)
    {
        //PDF file is stored under project/public/download/info.pdf
        $task = Task::find($id);

        $file= public_path(). "'/file_storage/task_files/'".$task->document;

        $headers = array(

            'Content-Type: application/xlsx',
        );

        return response()->download($file, 'filename.pdf', $headers);

    }

}
