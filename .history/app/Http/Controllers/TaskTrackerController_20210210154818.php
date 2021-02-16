<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskTracker;
use DB;

class TaskTrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        return view('backend.task.create', compact('employees', 'projects', 'newTaskNo'));
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

        $taskTracker = new TaskTracker;

            $taskTracker->project_id = $request->project_id;
            $taskTracker->employee_id = $request->employee_id;
            $taskTracker->task_no = $request->task_no;
            $taskTracker->priority = $request->priority;
            // $taskTracker->assign_date = Carbon::now()->toDateString();
            $taskTracker->assign_date = today();
        // $taskTracker->assign_date = $request->assign_date;
            $taskTracker->status = $request->status;
            $taskTracker->note = $request->note;
            $taskTracker->save();

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
        //
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
        //
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
}
