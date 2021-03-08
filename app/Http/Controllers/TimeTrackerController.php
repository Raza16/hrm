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

        // $time_trackers = TimeTracker::select('employee_id')
        // ->where(['date' => date('Y-m-d')])
        // // ->sum(DB::raw("TIME_TO_SEC(total_hours)"))
        // ->groupBy('employee_id')
        // ->get();

        // dd($time_trackers);

        // $sumTime =gmdate("H:i", $sum_total_hours);
        // dd($sumTime);

        // $time_trackers = TimeTracker::select(
        //     // 'employee_id',
        //     'checkin',
        //     // selectRaw(DB::raw('checkout')),
        //     // DB::raw(sum("TIME_TO_SEC(total_hours)"))
        // )
        // ->where('date', Carbon::today())
        // ->groupBy('checkin')
        // ->get();
        // dd($time_trackers);

        return view('backend.time_tracker.list', compact('time_trackers'));
    }
}
