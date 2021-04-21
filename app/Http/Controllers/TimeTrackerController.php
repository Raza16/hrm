<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeTracker;
use App\Models\TimeBreaker;
use DB;
use Carbon\Carbon;

class TimeTrackerController extends Controller
{
    public function index()
    {
        $time_trackers = TimeTracker::all();

        return view('time_tracker.list', compact('time_trackers'));
    }

    public function edit($id)
    {
        $timeTracker = TimeTracker::find($id);

        return response()->json($timeTracker);
    }

    public function update(Request $request, $id)
    {
        $time_tracker = TimeTracker::where('id', $id)
        ->update([
            'checkin' => $request->checkin,
            'checkout' => $request->checkout,
        ]);

        $totalTime = TimeTracker::select('checkin', 'checkout')->where('id', $id)->first();

        // -------------total time between two Date time with Carbon object
        $start_time = new Carbon($totalTime->checkin);
        $end_time = new Carbon($totalTime->checkout);
        $start_time->format('g:i a');
        $end_time->format('g:i a');
        $total_time = $start_time->diffInHours($end_time). ':' .$start_time->diff($end_time)->format('%I:%S');

        $sum_total_hours = TimeBreaker::where(['time_tracker_id' => $id])
        ->sum(DB::raw("TIME_TO_SEC(total_hours)"));
        $sumBreakTime = gmdate("H:i:s", $sum_total_hours);

        $total_time = new Carbon($total_time);
        $sumBreakTime = new Carbon($sumBreakTime);
        $total_time->format('h:i:s');
        $sumBreakTime->format('h:i:s');

        $workingHours = $total_time->diffInHours($sumBreakTime). ':' .$total_time->diff($sumBreakTime)->format('%I:%S');


        TimeTracker::where('id', $id)
        ->update([
            'total_hours' => $total_time,
            'break_hours' => $sumBreakTime,
            'working_hours' => $workingHours
        ]);

        return response()->json($time_tracker);
    }

    public function destory($id)
    {
        TimeTracker::find($id)->delete();

        return redirect('time-tracker')->with('delete', 'Record has been deleted');
    }

    public function editBreakTime($id)
    {
        $timeBreaker = TimeTracker::find($id)->timebreaks;

        return response()->json($timeBreaker);
    }

    public function updateBreakTime(Request $request, $id)
    {
        foreach($request->breakin as $key => $value)
        {
            // TimeBreaker::updateOrCreate([
            //     'id' => $request->id[$key],
            // ],
            // [
            //     'breakin' => $request->breakin[$key],
            //     'breakout' => $request->breakout[$key],
            // ]);
                TimeBreaker::where('time_tracker_id', $id)->update([

                'breakin' => $request->breakin[$key],
                'breakout' => $request->breakout[$key],

            ]);

        }

         return response()->json('Record has been updated!');
    }

}
