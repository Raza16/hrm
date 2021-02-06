<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\LoginMail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        // $users = User::with('employee')->all();
        return view('backend.user.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = DB::table('employees')->select('id', 'first_name', 'middle_name', 'last_name')->get();
        $roles = DB::table('roles')->select('id', 'role_type')->get();
        return view('backend.user.create', compact('employees' ,'roles'));
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
            'employee_id' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role_id' => 'required',
            'status' => 'required',
        ]);

        $user = new User;

        $user->employee_id = $request->employee_id;
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $loginPassword = $request->password;
        $user->password = Hash::make($loginPassword);
        $user->status = $request->status;
        $user->save();

        // $roleId = $request->role_id;

        // $user_role = [
        //     'user_id' => $user->id,
        //     'role_id' => $roleId,
        // ];

        // DB::table('role_user')->insert([$user_role]);

        $employeeData = DB::table('employees')
        ->select('first_name', 'middle_name', 'last_name', 'email')
        ->where('id', $request->employee_id)
        ->first();

        $loginData = [
            'first_name' => $employeeData->first_name,
            'middle_name' => $employeeData->middle_name,
            'last_name' => $employeeData->last_name,
            'loginEmail' => $request->email,
            'loginPassword' => $loginPassword,
        ];

        Mail::to($employeeData->email)->send(new LoginMail($loginData));

        return redirect('user/create')->with('success', 'Record has been saved');
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
        $employees = DB::table('employees')->select('id', 'first_name', 'middle_name', 'last_name')->get();
        $roles = DB::table('roles')->select('id', 'role_type')->get();

        $user = User::find($id);
     
        return view('backend.user.edit', compact('user', 'employees', 'roles'));
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
            'employee_id' => 'required|unique:users',
            'email' => 'required|unique:users',
            'role_id' => 'required',
            'status' => 'required',
        ]);

        $user = User::find($id);

        $user->employee_id = $request->employee_id;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        // $loginPassword = $request->password;
        // $user->password = Hash::make($loginPassword);
        $user->status = $request->status;
        $user->save();

        return redirect('user/create')->with('update', 'Record has been updated');
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
