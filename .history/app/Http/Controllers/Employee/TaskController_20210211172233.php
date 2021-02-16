<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Auth;
use Response;
use App\Models\Task;
use DB;


class TaskController extends Controller
{
    public function index()
    {
        $employee_id = Auth::user()->employee_id;
        // dd($employee_id);

        $tasks = Task::where('employee_id', $employee_id)->get();

        // $tasks = DB::table('tasks')
        // ->join('projects', 'projects.id', '=', 'tasks.project_id')
        // ->select('tasks.id as taskId',
        //         'tasks.task_no',
        //         'tasks.priority',
        //         'tasks.assign_date',
        //         'tasks.status', 
        //         'tasks.note',
        //         'tasks.document',
        //         'projects.id as projectId')
        // ->where('employee_id', '=', $employee_id)
        // ->groupBy('tasks.id as taskId',
        // // 'tasks.project_id',
        // 'tasks.task_no',
        // 'tasks.priority',
        // 'tasks.assign_date',
        // 'tasks.status', 
        // 'tasks.note',
        // 'tasks.document',
        // 'projects.id as projectId')
        // ->get();

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
        $task = Task::find($id);

        $file = public_path()."/file_storage/task_files/".$task->document;

        $headers = array(

            'Content-Type: application/*',
        );

        return response()->download($file, $task->document, $headers);
    }


    public function taskProgressForm()
    {   
        return view('backend.user_account.task.create');
    }

    public function taskProgressStore(Request $request, $id)
    {   
        $this->validate($request, [
            'status' => 'required',
        ]);

        $task = Task::find($id);

        $task->id;

        $data = [
            'date' => $request->date,
            'module' => $request->module,
            'hours' => $request->hours,
            'work_detail' => $request->work_detail
        ];

        DB::table('task_progress')->insert([]);






    }






}
