<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::withTrashed()->restore();
        return view('backend.client.list', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.client.create');
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
            'full_name' => 'required',
            'email' => 'required',
            // 'mobile_no' => 'required',
        ]);

        $client = new Client;

        $client->full_name = $request->full_name;
        $client->gender = $request->gender;
        $client->email = $request->email;
        $client->mobile_no = $request->mobile_no;
        $client->country = $request->country;
        $client->state_province = $request->state_province;
        $client->city = $request->city;

        $client->save();

        return redirect('client/create')->with('success', 'Record has been submited');
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
        $client = Client::find($id);
        return view('backend.client.edit', compact('client'));
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
            'full_name' => 'required',
            'email' => 'required',
            // 'mobile_no' => 'required',
        ]);

        $client = Client::find($id);

        $client->full_name = $request->full_name;
        $client->gender = $request->gender;
        $client->email = $request->email;
        $client->mobile_no = $request->mobile_no;
        $client->country = $request->country;
        $client->state_province = $request->state_province;
        $client->city = $request->city;

        $client->save();

        return redirect('client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();

        return redirect('client');
    }
}
