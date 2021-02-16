<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;

class LeaveController extends Controller
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
        return view('backend.user_account.leave.create');
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
            'employee_id' => 'required',
            'leave_type' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'status' => 'required',
        ]);

        // $project = new Leave;

        // $project->client_id = $request->client_id;
        // $project->title = $request->title;
        // $project->status = $request->status;
        // $project->start_date = $request->start_date;
        // $project->end_date = $request->end_date;
        // $project->technology = $request->technology;
        // $project->website = $request->website;
        // $project->note = $request->note;
        // $project->save();

        $employeeId = Auth::user()->employee_id;

        $data = [
            'employee_id' => $employeeId,
            'leave_type' => $request->leave_type,
            'from_date' => $request->from_date,
            'to_date' => $request->to_date,
            'reason' => $request->reason,
            'status' => "pending",
        ];

        Leave::create([$data]);
        // DB::table('leaves')->create([$data]);


        return redirect('leave')->with('success', 'Record has been submited');
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
