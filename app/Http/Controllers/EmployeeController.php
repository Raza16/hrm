<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Employee;
use App\Models\EmployeeDocuments;
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
            'last_name' => 'required',
            'gender' => 'required',
            'cnic' => 'unique:employees',
            'mobile_no' => 'required|unique:employees',
            'email' => 'required|unique:employees',
            'profile_image' => 'image|mimes:jpeg,png,jpg',
            // 'file.*' => 'mimes:jpeg, png, jpg, pdf, docx, doc'
        ],
        [
            'profile_image.mimes'=> 'Image must be in jpeg, png, jpg',
            // 'file.mimes' => 'File must be jpeg, png, jpg, pdf, docx, doc'
        ]
        );


        $employee = new Employee;

        $employee->employee_no = $request->employee_no;
        $employee->first_name = $request->first_name;
        $employee->middle_name = $request->middle_name;
        $employee->last_name = $request->last_name;
        $employee->date_of_birth = $request->date_of_birth;
        $employee->gender = $request->gender;
        $employee->marital_status = $request->marital_status;
        $employee->qualification = $request->qualification;
        $employee->cnic = $request->cnic;
        $employee->mobile_no = $request->mobile_no;
        $employee->home_phone = $request->home_phone;
        $employee->emergency_contact = $request->emergency_contact;
        $employee->email = $request->email;
        $employee->other_email = $request->other_email;
        $employee->country = $request->country;
        $employee->province_state = $request->province_state;
        $employee->city = $request->city;
        $employee->nationality = $request->nationality;
        $employee->postal_code = $request->postal_code;
        $employee->address = $request->address;
        $employee->notes = $request->notes;

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $name = time().'_'.$image->getClientOriginalName();
            $destinationPath = public_path('/img/profile-images');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $employee->profile_image = $name;
        }

        if($employee->save())
        {
            foreach ($request->file as $file) {
le) {
                $filename =  time().'_'.$file->get            foreach ($request->file as $file) {
 public_path('storage/employee_documents');
                $filePath = $destinationPath. "/".  $filename;
                $file->move($destinationPath, $filename);
                EmployeeDocuments::create([
                    'employee_id' => $employee->id,
                    'file' => $filename
                ]);
            }
        }

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
        $employee = Employee::find($id);
        return view('backend.employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        $employeeDocuments = Employee::find($id)->documents;
        return view('backend.employee.edit', compact('employee', 'employeeDocuments'));
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
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'mobile_no' => 'required',
            'email' => 'required',
            'profile_image' => 'image|mimes:jpeg,png,jpg',
            'file.*' => 'mimes:jpeg, png, jpg, pdf, docx, doc'
        ],
        [
            'profile_image.mimes'=> 'Image must be in jpeg, png, jpg',
        ]);


        $employee = Employee::find($id);

        $employee->first_name = $request->first_name;
        $employee->middle_name = $request->middle_name;
        $employee->last_name = $request->last_name;
        $employee->date_of_birth = $request->date_of_birth;
        $employee->gender = $request->gender;
        $employee->marital_status = $request->marital_status;
        $employee->qualification = $request->qualification;
        $employee->cnic = $request->cnic;
        $employee->mobile_no = $request->mobile_no;
        $employee->home_phone = $request->home_phone;
        $employee->emergency_contact = $request->emergency_contact;
        $employee->email = $request->email;
        $employee->other_email = $request->other_email;
        $employee->country = $request->country;
        $employee->province_state = $request->province_state;
        $employee->city = $request->city;
        $employee->nationality = $request->nationality;
        $employee->postal_code = $request->postal_code;
        $employee->address = $request->address;
        $employee->notes = $request->notes;

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $name = time().'_'.$image->getClientOriginalName();
            $destinationPath = public_path('/img/profile-images');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $old_image = $employee->profile_image;
            $employee->profile_image = $name;

            Storage::disk('profile-image')->delete($old_image);
        }

        if($employee->save())
        {
            foreach ($request->file ? : [] as $file) {
                $filename =  time().'_'.$file->getClientOriginalName();
                $destinationPath = public_path('storage/employee_documents');
                $filePath = $destinationPath. "/".  $filename;
                $file->move($destinationPath, $filename);
                EmployeeDocuments::create([
                    'employee_id' => $employee->id,
                    'file' => $filename
                ]);
            }
        }

        $request->session()->flash('update', 'Record has been updated');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        // "profile-image" is a custom disk name in config/filesystems.php
        Storage::disk('profile-image')->delete($employee->profile_image);

        session()->flash('delete', 'Record has been deleted');

        return redirect('/employee');
    }

    public function viewDocs($id)
    {
        $employeeDoc = EmployeeDocuments::find($id);

        return view('backend.employee.file_view', compact('employeeDoc'));
    }

    public function deleteDocs($id)
    {
        $employeeDoc = EmployeeDocuments::find($id);
        $employeeDoc->delete();

        Storage::disk('employee-documents')->delete($employeeDoc->file);

        return response()->json([
            'message' => 'Record delete successfully!'
          ]);
    }
}
