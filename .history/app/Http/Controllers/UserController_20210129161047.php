<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('backend.user.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = DB::table('roles')->select('id', 'role_type')->get();
        return view('backend.user.create', compact('roles'));
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
            'cnic' => 'unique:employees',
            'mobile_no' => 'required|unique:employees',
            // 'home_phone' => 'required',
            // 'emergency_contact' => 'required',
            'email' => 'required|unique:employees',
            // 'other_email' => 'required',
            // 'country' => 'required',
            // 'province_state' => 'required',
            // 'city' => 'required',
            // 'nationality' => 'required',
            // 'postal_code' => 'required',
            // 'address' => 'required',
            // 'notes' => 'required',
            'profile_image' => 'image|mimes:jpeg,png,jpg|dimensions:width=200,height=200',
            // 'login_email' => 'unique:users',
            // 'password' => ''
            // 'role_id' => ''
        ],
        [
            'profile_image.dimensions'=> 'Image must be in 200x200 dimension',
        ]);


        $user = new User;

        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        
        $user->save();

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
