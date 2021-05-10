<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Task;
use App\Models\Project;
use App\Models\Employee;
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
        try {
            $tasks = Task::all();
        } catch (\Exception $e) {

            return 'Record not found!';
        }

        return view('task.list', compact('tasks'));
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
            return view('task.create', compact('employees', 'projects', 'newTaskNo'));
        }

        $lastTaskNo = DB::table('tasks')->orderBy('id', 'desc')->pluck('task_no')->first();
        $task_no = preg_replace("/[^0-9\.]/", '', $lastTaskNo);
        $newTaskNo = sprintf('%07d', $task_no+1);

        return view('task.create', compact('employees', 'projects', 'newTaskNo'));
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
        ]);

        $task = new Task;

        $task->project_id = $request->project_id;
        $task->employee_id = $request->employee_id;
        $task->task_no = $request->task_no;
        $task->priority = $request->priority;
        $task->assign_date = $request->assign_date;
        $task->deadline_date = $request->deadline_date;
        $task->status = $request->status;
        $task->progress = 0;
        $task->note = $request->note;

        if($task->save())
        {
            foreach ($request->attachment ? : [] as $file) {
                $filename =  time().'_'.$file->getClientOriginalName();
                $destinationPath = public_path('/storage/task_files');
                $filePath = $destinationPath. "/".  $filename;
                $file->move($destinationPath, $filename);
                DB::table('task_attachments')->insert([
                    'task_id' => $task->id,
                    'attachment' => $filename
                ]);
            }
        }

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
        $task = Task::find($id);

        return response()->json($task);
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

        return view('task.edit', compact('task', 'projects', 'employees'));
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
            'priority' => 'required',
            'assign_date' => 'required',
        ]);

        $task = Task::find($id);

        $task->project_id = $request->project_id;
        $task->employee_id = $request->employee_id;
        $task->priority = $request->priority;
        $task->assign_date = $request->assign_date;
        $task->deadline_date = $request->deadline_date;
        $task->status = $request->status;
        $task->note = $request->note;

        if($task->save())
        {
            foreach ($request->attachment ? : [] as $file) {
                $filename =  time().'_'.$file->getClientOriginalName();
                $destinationPath = public_path('/storage/task_files');
                $filePath = $destinationPath. "/".  $filename;
                $file->move($destinationPath, $filename);
                DB::table('task_attachments')->insert([
                    'task_id' => $task->id,
                    'attachment' => $filename
                ]);
                // Storage::disk('task-attachment')->delete($old_image);
            }
        }

        return redirect()->back()->with('update', 'Record has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id)->delete();
        // $task = Task::find($id)->task_attachment->delete();
        // Storage::disk('task-attachment')->delete($task->attachment);

        return redirect('/task')->with('success', 'Task deleted successfully');
    }

    public function viewTaskProgress($id)
    {
        $viewTaskProgress = DB::table('task_progress')
        ->join('tasks', 'tasks.id', '=', 'task_progress.task_id')
        ->join('projects', 'projects.id', '=', 'tasks.project_id')
        // ->join('clients', 'clients.id', '=', 'projects.client_id')
        ->join('employees', 'employees.id', '=', 'tasks.employee_id')
        ->select(
            'employees.first_name',
            'employees.middle_name',
            'employees.last_name',
            'projects.title',
            // 'clients.full_name',
            // 'task_progress.date',
            // 'task_progress.module',
            // 'task_progress.hours',
            // 'task_progress.work_detail',
            'tasks.id',
            'tasks.task_no',
            'tasks.priority',
            'tasks.assign_date',
            'tasks.deadline_date',
            'tasks.status',
            'tasks.progress',
        )
        ->where('tasks.id', $id)
        ->first();

        $viewWorkDetail = DB::table('task_progress')
        ->join('tasks', 'tasks.id', '=', 'task_progress.task_id')
        ->join('projects', 'projects.id', '=', 'tasks.project_id')
        ->join('clients', 'clients.id', '=', 'projects.client_id')
        ->join('employees', 'employees.id', '=', 'tasks.employee_id')
        ->select(
            'employees.first_name',
            'employees.middle_name',
            'employees.last_name',
            'projects.title',
            'clients.full_name',
            'task_progress.id',
            'task_progress.date',
            'task_progress.module',
            'task_progress.hours',
            'task_progress.work_detail',
            'tasks.status',
            'tasks.progress',
        )
        ->where('task_progress.task_id', $id)
        ->get();

        $modules = DB::table('task_modules')->select('module')->get();

        $projects = Project::select('title')->get();
        $employees = Employee::select('first_name', 'middle_name', 'last_name')->get();

        return view('task.task_progress', compact('viewWorkDetail', 'viewTaskProgress', 'modules', 'projects', 'employees'));
    }

    public function checkViewProgress($id)
    {
        $checkViewProgress = DB::table('task_progress')
        ->join('tasks', 'tasks.id', '=', 'task_progress.task_id')
        ->join('projects', 'projects.id', '=', 'tasks.project_id')
        ->join('employees', 'employees.id', '=', 'tasks.employee_id')
        ->select(
            'employees.first_name',
            'employees.middle_name',
            'employees.last_name',
            'projects.title',
            'tasks.task_no',
            'tasks.id',
            'tasks.priority',
            'tasks.assign_date',
            'tasks.deadline_date',
            'tasks.status',
            'tasks.progress',
        )
        ->where('tasks.id', $id)
        ->first();

        return response()->json($checkViewProgress);
    }

    public function taskEdit($id)
    {
        $editTask  = Task::where('id', $id)->first();

        return response()->json($editTask);
    }

    public function taskProgressEdit($id)
    {
        $taskProgress  = DB::table('task_progress')->where('id', $id)->first();

        return response()->json($taskProgress);
    }

    public function taskProgressUpdate(Request $request, $id)
    {
        $taskProgressUpdate  = DB::table('task_progress')
        ->where('id', $id)
        ->update([
            'date' => $request->date,
            'module' => $request->module,
            'hours' => $request->hours,
            'work_detail' => $request->work_detail
        ]);

        return response()->json('Task Progress Updated!');
    }

    public function taskReport()
    {
        $taskReport = DB::table('task_progress')
        ->join('tasks', 'tasks.id', '=', 'task_progress.task_id')
        ->join('projects', 'projects.id', '=', 'tasks.project_id')
        ->join('clients', 'clients.id', '=', 'projects.client_id')
        ->join('employees', 'employees.id', '=', 'tasks.employee_id')
        ->select('employees.first_name',
                'employees.middle_name',
                'employees.last_name',
                'projects.title',
                'clients.full_name',
                'task_progress.date',
                'task_progress.module',
                'task_progress.hours',
                'task_progress.work_detail')
        ->get();

        return view('task.report', compact('taskReport'));
    }

    public function taskModuleForm()
    {
        $taskModules = DB::table('task_modules')->get();

        return view('task.create_task_module', compact('taskModules'));
    }

    public function taskModuleStore(Request $request)
    {
        $this->validate($request, [
            'module' => 'required',
        ]);

        DB::table('task_modules')->insert([
            'module' => $request->module,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        return redirect()->back()->with('success', 'Record submitted successfully');
    }

    public function taskModuleEdit($id)
    {
        $taskModule = DB::table('task_modules')->where('id', $id)->first();

        return response()->json($taskModule);
    }

    public function taskModuleUpdate(Request $request, $id)
    {
        $taskModule = DB::table('task_modules')
        ->where('id', $id)
        ->update([
            'module' => $request->module,
        ]);

        return response()->json($taskModule);
    }

    public function taskModuleDestory($id)
    {
        DB::table('task_modules')->where('id', $id)->delete();

        return response()->json([
            'message' => 'Record deleted successfully!',
        ]);
    }

}
