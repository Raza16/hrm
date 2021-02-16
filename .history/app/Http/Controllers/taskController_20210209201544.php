<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class taskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $task = DB::table('tasks')->latest()->first();
        if(!$task){
            $newTaskNo = "EMP-0000001";
            return view('backend.task.create', compact('newTaskNo'));
        }

        $lastTaskNo = DB::table('tasks')->orderBy('id', 'desc')->pluck('employee_no')->first();
        $prefix = "EMP-";
        $employee_no = preg_replace("/[^0-9\.]/", '', $lastTaskNo);
        $newEmployeeNo = $prefix . sprintf('%06d', $employee_no+1);

        $projects = DB::table('projects')->select('id', 'title')->get();
        $employees = DB::table('employees')->select('id', 'first_name', 'middle_name', 'last_name')->get();

        return view('backend.task.create', compact('employees', 'projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
