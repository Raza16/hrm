<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;
use Auth;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeeId = Auth::user()->employee_id;
        // dd($employeeId);
        $leaves = Leave::where('employee_id', $employeeId)->get();

        return view('backend.user_account.leave.list', compact('leaves'));
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
            'leave_type' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
        ]);

        $employeeId = Auth::user()->employee_id;

        $data = [
            'employee_id' => $employeeId,
            'leave_type' => $request->leave_type,
            'from_date' => $request->from_date,
            'to_date' => $request->to_date,
            'reason' => $request->reason,
            'status' => "pending",
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ];

        Leave::insert([$data]);
        // DB::table('leaves')->create([$data]);

        return redirect('leave/create')->with('success', 'Record has been submited');
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
        $leave = Leave::find($id);

        return view('backend.user_account.leave.edit', compact('leave'));
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
            'leave_type' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
        ]);

        $leave = Leave::find($id);

        $leave->leave_type = $request->leave_type;
        $leave->from_date = $request->from_date;
        $leave->to_date = $request->to_date;
        $leave->reason = $request->reason;

        $leave->save();

        // $employeeId = Auth::user()->employee_id;

        // $data = [
        //     // 'employee_id' => $employeeId,
        //     'leave_type' => $request->leave_type,
        //     'from_date' => $request->from_date,
        //     'to_date' => $request->to_date,
        //     'reason' => $request->reason,
        //     'updated_at' => \Carbon\Carbon::now()
        // ];

        // dd($data);

        // $leave =  Leave::where('id', $id)->update([$data]);

        $request->session()->flash('update', 'Record has been updated');

        return redirect('leave');
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
