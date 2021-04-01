<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Leave;
use App\Models\Task;
use App\Models\TimeTracker;
use App\Models\TimeBreaker;
use DateTime;
use DateTimeZone;
use Timezone;
use DB;
use Carbon\Carbon;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        $employee = Auth::user()->employee;

        $leaveCount = DB::table('leaves')
        ->where('employee_id', $employee->id)
        ->where('status', 'approved')
        ->whereYear('created_at', date('Y'))
        ->sum('days');

        $completedTaskCount = DB::table('tasks')
        ->where('employee_id', $employee->id)
        ->where('status', 'completed')
        ->count();

        $processTaskCount = DB::table('tasks')
        ->where('employee_id', $employee->id)
        ->where('status', 'process')
        ->count();

        $todayTasks = Task::where(['employee_id' => $employee->id, 'assign_date' => date("Y-m-d")])->get();

        $employeeTimes = TimeTracker::where('employee_id', $employee->id)
        ->orderBy('date', 'DESC')
        ->get();

        // dd($employeeTimes);

        // dd($EmployeeTime);

        // // total hours between two dates
        // $start_date = new DateTime($timeEntry->checkin);
        // $since_start = $start_date->diff(new DateTime($timeEntry->checkout));
        // dd($since_start->h);

        // $timezoneDate = date('g:i a', strtotime(now()));
        // dd($timezoneDate);

        // -------------24 hours to 12 hours conversion using string
        // $date = '2021-02-26 11:00:13';
        // dd(date('g:i a', strtotime($userCreated_at->created_at)));

        // $checkinDone = TimeTracker::whereNull('checkout')
        //     ->whereHas('employee', function ($query) {
        //         $query->where('id', Auth::user()->employee->id);
        //     })
        //     ->first();

        // $checkinPrevious = TimeTracker::whereNull('checkout')
        // ->where('employee_id', $employee->id)
        // ->whereDate('date', Carbon::yesterday())
        // ->first();
        // dd($checkinPrevious);

        $checkinDone = TimeTracker::whereNull('checkout')
        ->where('employee_id', $employee->id)
        ->where('date', Carbon::today())
        ->first();
        // dd($checkinDone);

        // $checkinTime = TimeTracker::select('id')
        // ->where('employee_id', $employee->id)
        // ->where('date', date('Y-m-d'))
        // ->first();
        // dd($checkinTime);

        $breakinDone = TimeBreaker::whereNull('breakout')
        ->where('employee_id', $employee->id)
        ->first();
        // dd($breakinDone);

        // $leave_days = Leave::where('employee_id', Auth::user()->employee->id)
        // ->select('from_date', 'to_date')
        // ->first();

        return view('backend.user_account.dashboard', compact(
            'employee',
            'leaveCount',
            'completedTaskCount',
            'processTaskCount',
            'todayTasks',
            'checkinDone',
            'breakinDone',
            // 'checkinPrevious',
            'employeeTimes',
            // 'leave_days'
        ));
    }


    public function checkInTimeStore(Request $request)
    {
        $employee = Auth::user()->employee;

        $timeTracker = new TimeTracker;

        $timeTracker->employee_id = $employee->id;
        $timeTracker->checkin = new DateTime("now", new DateTimeZone('Asia/Karachi'));
        $timeTracker->date = Carbon::today();

        $timeTracker->save();

        return redirect('/user_account')->with('success', 'CheckIn time has been submited');

    }

    public function breakInTimeStore(Request $request)
    {
        $employee = Auth::user()->employee;

        // DB::table('time_tracker')->whereExists('date');

        $checkInId = TimeTracker::select('id')->whereNull('checkout')
            ->where('employee_id', Auth::user()->employee->id)
            ->whereDate('date', Carbon::today())
            ->first();

        $timeBreaker = DB::table('time_breaks')->insert([
            'time_tracker_id' => $checkInId->id,
            'employee_id' => $employee->id,
            'date' => Carbon::today(),
            'breakin' => new DateTime("now", new DateTimeZone('Asia/Karachi')),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('success', 'Break time has been submited');
    }

    public function breakOutTimeUpdate(Request $request)
    {
        $checkInId = TimeTracker::select('id')->whereNull('checkout')
            ->where('employee_id', Auth::user()->employee->id)
            ->whereDate('date', Carbon::today())
            ->first();

        $timeEntry = TimeBreaker::whereNull('breakout')
            ->where('time_tracker_id', $checkInId->id)
            ->first();

            if ($timeEntry)
            {
                $timeEntry->update([
                    'breakout' =>  new DateTime("now", new DateTimeZone('Asia/Karachi')),
                ]);

                $totalTime = TimeBreaker::select('breakin', 'breakout')->whereNull('total_hours')
                ->where('time_tracker_id', $checkInId->id)
                ->first();

                // -------------total time between two Date time with Carbon object
                $start_time = new Carbon($totalTime->breakin);
                $end_time = new Carbon($totalTime->breakout);
                $start_time->format('g:i a');
                $end_time->format('g:i a');
                $total_time = $start_time->diffInHours($end_time). ':' .$start_time->diff($end_time)->format('%I:%S');

                $timeEntry->update([
                    'total_hours' =>  $total_time,
                ]);

                return redirect('/user_account')->with('success', 'Break Off time has been submited');
            }
    }

    public function checkOutTimeUpdate(Request $request)
    {
        $timeEntry = TimeTracker::whereNull('checkout')
        ->where('employee_id', Auth::user()->employee->id)
        ->whereDate('date', Carbon::today())
        ->first();

        if ($timeEntry)
        {
            $timeEntry->update([
                'checkout' =>  new DateTime("now", new DateTimeZone('Asia/Karachi')),
            ]);

            $totalTime = TimeTracker::select('checkin', 'checkout')->whereNull('total_hours')
            ->where('employee_id', Auth::user()->employee->id)
            ->whereDate('date', Carbon::today())
            ->first();

            // -------------total time between two Date time with Carbon object
            $start_time = new Carbon($totalTime->checkin);
            $end_time = new Carbon($totalTime->checkout);
            $start_time->format('g:i a');
            $end_time->format('g:i a');
            $total_time = $start_time->diffInHours($end_time). ':' .$start_time->diff($end_time)->format('%I:%S');


            $timeTrackerId = TimeTracker::select('id')->whereNull('break_hours')
            ->where('employee_id', Auth::user()->employee->id)
            ->whereDate('date', Carbon::today())
            ->first();

            $sum_total_hours = TimeBreaker::where(['time_tracker_id' => $timeTrackerId->id, 'employee_id' => Auth::user()->employee->id, 'date' => date('Y-m-d')])
            ->sum(DB::raw("TIME_TO_SEC(total_hours)"));
            $sumTime = gmdate("H:i:s", $sum_total_hours);

            $timeEntry->update([
                'total_hours' =>  $total_time,
                'break_hours' =>  $sumTime,
            ]);


            $getWorkingHours = TimeTracker::select('total_hours', 'break_hours')
            ->where('employee_id', Auth::user()->employee->id)
            ->where('date', Carbon::today())
            ->first();

            $totalHours = new Carbon($getWorkingHours->total_hours);
            $totalBreaks = new Carbon($getWorkingHours->break_hours);
            $totalHours->format('h:i:s');
            $totalBreaks->format('h:i:s');

            $workingHours = $totalHours->diffInHours($totalBreaks). ':' .$totalHours->diff($totalBreaks)->format('%I:%S');

            $timeEntry->update([
                'working_hours' =>  $workingHours,
            ]);

            return redirect('/user_account')->with('success', 'CheckOut time has been submited');
        }
        else{
            return redirect('/user_account')->with('success', 'CheckOut time is missing');
        }

        // $checkinPrevious = TimeTracker::whereNull('checkout')
        // ->where('employee_id', Auth::user()->employee->id)
        // ->whereDate('date', Carbon::yesterday())
        // ->first();

        // if($checkinPrevious) {

        //     $this->validate($request, [
        //         'checkout' => 'required',
        //     ]);

        //     $checkinPrevious->update([
        //         'checkout' => date("Y-m-d H:i:s", strtotime($request->checkout)),
        //     ]);

        //     $totalTime = TimeTracker::select('checkin', 'checkout')->whereNull('total_hours')
        //     ->where('employee_id', Auth::user()->employee->id)
        //     ->where('date', Carbon::yesterday())
        //     ->first();

        //     // -------------total time between two Date time with Carbon object
        //     $start_time = new Carbon($totalTime->checkin);
        //     $end_time = new Carbon($totalTime->checkout);
        //     $start_time->format('g:i a');
        //     $end_time->format('g:i a');
        //     $total_time = $start_time->diffInHours($end_time). ':' .$start_time->diff($end_time)->format('%I:%S');

        //     $checkinPrevious->update([
        //         'total_hours' =>  $total_time,
        //     ]);

        //     return redirect('/user_account')->with('success', 'Previous CheckOut time has been submited');
        // }
        // else{

        //     $timeEntry = TimeTracker::whereNull('checkout')
        //     ->where('employee_id', Auth::user()->employee->id)
        //     ->where('date', date('Y-m-d'))
        //     ->first();

        //     if ($timeEntry)
        //     {
        //         $timeEntry->update([
        //             'checkout' =>  new DateTime("now", new DateTimeZone('Asia/Karachi')),
        //         ]);

        //         $totalTime = TimeTracker::select('checkin', 'checkout')->whereNull('total_hours')
        //         ->where('employee_id', Auth::user()->employee->id)
        //         ->where('date', date('Y-m-d'))
        //         ->first();

        //         // -------------total time between two Date time with Carbon object
        //         $start_time = new Carbon($totalTime->checkin);
        //         $end_time = new Carbon($totalTime->checkout);
        //         $start_time->format('g:i a');
        //         $end_time->format('g:i a');
        //         $total_time = $start_time->diffInHours($end_time). ':' .$start_time->diff($end_time)->format('%I:%S');

        //         $timeEntry->update([
        //             'total_hours' =>  $total_time,
        //         ]);

        //         return redirect('/user_account')->with('success', 'CheckOut time has been submited');
        //     }
        //     else{
        //         return redirect('/user_account')->with('success', 'Enter your Previous CheckOut time');
        //     }
        // }


    }

    public function viewTime($id)
    {
        $viewTime = TimeTracker::where('employee_id', Auth::user()->employee->id)
        ->where('id', $id)
        ->first();

        return response()->json($viewTime);
    }

    public function updateTime(Request $request, $id)
    {
        $viewTime = DB::table('time_tracker')
        ->where('id', $id)
        ->update([
            'checkin' => $request->checkin,
            'checkout' => $request->checkout,
        ]);

        return response()->json($viewTime);
    }


}
