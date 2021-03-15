<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeTracker;
use DB;
use Carbon\Carbon;

class TimeTrackerController extends Controller
{
    public function index()
    {
        $time_trackers = TimeTracker::all();

        return view('backend.time_tracker.list', compact('time_trackers'));
    }
}
