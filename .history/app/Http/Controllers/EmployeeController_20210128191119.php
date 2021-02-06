<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('backend.employee.list', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee = DB::table('employees')->latest()->first();
        if(!$employee){
            $newEmployeeNo = "EMP-000001";
            return view('backend.employee.create', compact('newEmployeeNo'));
        }

        $lastEmployeeNo = DB::table('employees')->orderBy('id', 'desc')->pluck('employee_no')->first();
        $prefix = "EMP-";
        $employee_no = preg_replace("/[^0-9\.]/", '', $lastEmployeeNo);
        $newEmployeeNo = $prefix . sprintf('%06d', $employee_no+1);

        return view('backend.employee.create', compact('newEmployeeNo'));
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
            'employee_no' => 'required|unique:employees',
            'first_name' => 'required',
            // 'middle_name' => 'required|max:255',
            'last_name' => 'required',
            // 'date_of_birth' => 'required|max:255',
            'gender' => 'required',
            // 'marital_status' => 'required',
            // 'qualification' => 'required',
            // 'cnic' => 'required',
            'mobile_no' => 'required',
            // 'home_phone' => 'required',
            // 'emergency_contact_no' => 'required',
            // 'email' => 'required',
            // 'other_email' => 'required',
            // 'country' => 'required',
            // 'province_state' => 'required',
            // 'city' => 'required',
            // 'nationality' => 'required',
            // 'postal_code' => 'required',
            // 'address' => 'required',
            // 'notes' => 'required',
            'profile_image' => 'image|mimes:jpeg,png,jpg|dimensions:width=200,height=200',
        ],
        [
            'profile_image.dimensions'=> 'Image must be in 200x200 dimension',
        ]);


        $employee = new Employee;

        $employee->title = $request->title;
        $employee->description = $request->description;
        $employee->author = $request->author;
        $employee->slug = $request->slug;
        $employee->meta_title = $request->meta_title;
        $employee->meta_description = $request->meta_description;

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $name = time().'_'.$image->getClientOriginalName();
            $destinationPath = public_path('/img/profile-images');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $employee->profile_image = $name;
        }

        DB::table('employees')->insert([$employee]);

        return redirect('employee/create')->with('success', 'Record has been saved');

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
