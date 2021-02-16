<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Task;
use Carbon\Carbon;
use DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('backend.task.list', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = DB::table('projects')->select('id', 'title')->get();
        $employees = DB::table('employees')->select('id', 'first_name', 'middle_name', 'last_name')->get();

        $task = DB::table('tasks')->latest()->first();
        if(!$task){
            $newTaskNo = "0000001";
            return view('backend.task.create', compact('employees', 'projects', 'newTaskNo'));
        }

        $lastTaskNo = DB::table('tasks')->orderBy('id', 'desc')->pluck('task_no')->first();
        $task_no = preg_replace("/[^0-9\.]/", '', $lastTaskNo);
        $newTaskNo = sprintf('%07d', $task_no+1);

        // $todayDate = today();
        $todayDate = date("Y-m-d");

        return view('backend.task.create', compact('employees', 'projects', 'newTaskNo', 'todayDate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'project_id' => 'required',
            'employee_id' => 'required',
            'task_no' => 'required|unique:tasks',
            'priority' => 'required',
            'assign_date' => 'required',
            'status' => 'required',
            // 'note' => 'required',
            // 'note' => '',
        ]);

            $task = new Task;

            $task->project_id = $request->project_id;
            $task->employee_id = $request->employee_id;
            $task->task_no = $request->task_no;
            $task->priority = $request->priority;
            $task->assign_date = $request->assign_date;
            // $task->assign_date = date("Y-m-d");
            $task->status = $request->status;
            $task->note = $request->note;
            
            if ($request->hasFile('document')) {
                $file = $request->file('document');
                $fileName = time().'_'.$file->getClientOriginalName();
                $destinationPath = public_path('/file_storage/task_files');
                $filePath = $destinationPath. "/".  $fileName;
                $file->move($destinationPath, $fileName);
                $task->document = $fileName;
            }
            
            $task->save();
            
        return redirect('task/create')->with('success', 'Record has been submited');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);

        $projects = DB::table('projects')->select('id', 'title')->get();
        $employees = DB::table('employees')->select('id', 'first_name', 'middle_name', 'last_name')->get();

        return view('backend.task.edit', compact('task', 'projects', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'project_id' => 'required',
            'employee_id' => 'required',
            // 'task_no' => 'required|unique:tasks',
            'priority' => 'required',
            'assign_date' => 'required',
            'status' => 'required',
        ]);

            $task = Task::find($id);

            $task->project_id = $request->project_id;
            $task->employee_id = $request->employee_id;
            // $task->task_no = $request->task_no;
            $task->priority = $request->priority;
            $task->assign_date = $request->assign_date;
            $task->status = $request->status;
            $task->note = $request->note;
            
            if ($request->hasFile('document')) {
                $file = $request->file('document');
                $fileName = time().'_'.$file->getClientOriginalName();
                $destinationPath = public_path('/file_storage/task_files');
                $filePath = $destinationPath. "/".  $fileName;
                $file->move($destinationPath, $fileName);
                $old_image = $task->document;
                $task->document = $fileName;
    
                Storage::disk('task-attachment')->delete($old_image);
            }

            $task->save();
            
            return redirect('task');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function taskReport()
    {
        return view('');
    }



}
