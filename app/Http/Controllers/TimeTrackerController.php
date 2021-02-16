<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeTrackerController extends Controller
{
    public function index()
    {
        
        return view('backend.attendance.list');
    }
}
