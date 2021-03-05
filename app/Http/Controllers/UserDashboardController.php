<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Leave;
use App\Models\Task;
use App\Models\TimeTracker;
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


        // // total hours between two dates
        // $start_date = new DateTime($timeEntry->checkin);
        // $since_start = $start_date->diff(new DateTime($timeEntry->checkout));
        // dd($since_start->h);

        $currentDateTime = new DateTime("now", new DateTimeZone('Asia/Karachi'));
        // dd($dataTime);

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

        $checkinPrevious = TimeTracker::whereNull('checkout')
        ->where('employee_id', $employee->id)
        ->whereDate('date', Carbon::yesterday())
        ->first();
        // dd($checkinPrevious);

        $checkinDone = TimeTracker::whereNull('checkout')
        ->where('employee_id', $employee->id)
        ->where('date', date('Y-m-d'))
        ->first();
        // dd($checkinDone);

        // $sum_total_hours = TimeTracker::where(['employee_id' => $employee->id, 'date' => date('Y-m-d')])
        // ->sum(DB::raw("TIME_TO_SEC(total_hours)"));
        // $sumTime =gmdate("H:i", $sum_total_hours);
        // dd($sumTime);


        return view('backend.user_account.dashboard', compact(
            'employee',
            'leaveCount',
            'completedTaskCount',
            'processTaskCount',
            'todayTasks',
            'currentDateTime',
            'checkinDone',
            'checkinPrevious'
        ));
    }


    public function checkInTimeStore(Request $request)
    {
        $employee = Auth::user()->employee;

        $timeTracker = new TimeTracker;

        $timeTracker->employee_id = $employee->id;
        $timeTracker->checkin = new DateTime("now", new DateTimeZone('Asia/Karachi'));
        $timeTracker->date = date('Y-m-d');

        $timeTracker->save();

        return redirect('/user_account')->with('success', 'CheckIn time has been submited');

    }

    public function checkOutTimeUpdate(Request $request)
    {

        // $timeEntry = TimeTracker::select('checkin')->whereNull('checkout')
        //     ->whereHas('employee', function ($query) {
        //         $query->where('id', Auth::user()->employee->id);
        //     })
        //     ->first();

        // $currentCheckin = TimeTracker::whereNull('checkout')
        // ->where('employee_id', Auth::user()->employee->id)
        // ->whereDate('date', Carbon::today())
        // ->first();

        // if(!$currentCheckin){
        //     return redirect('/user_account')->with('success', 'First Enter your Previous CheckOut time');
        // }


        $checkinPrevious = TimeTracker::whereNull('checkout')
        ->where('employee_id', Auth::user()->employee->id)
        ->whereDate('date', Carbon::yesterday())
        ->first();

        if($checkinPrevious) {

            $this->validate($request, [
                'checkout' => 'required',
            ]);

            $checkinPrevious->update([
                'checkout' => date("Y-m-d H:i:s", strtotime($request->checkout)),
            ]);

            $totalTime = TimeTracker::select('checkin', 'checkout')->whereNull('total_hours')
            ->where('employee_id', Auth::user()->employee->id)
            ->where('date', Carbon::yesterday())
            ->first();

            // -------------total time between two Date time with Carbon object
            $start_time = new Carbon($totalTime->checkin);
            $end_time = new Carbon($totalTime->checkout);
            $start_time->format('g:i a');
            $end_time->format('g:i a');
            $total_time = $start_time->diffInHours($end_time). ':' .$start_time->diff($end_time)->format('%I:%S');

            $checkinPrevious->update([
                'total_hours' =>  $total_time,
            ]);

            return redirect('/user_account')->with('success', 'Previous CheckOut time has been submited');
        }
        else{

            $timeEntry = TimeTracker::whereNull('checkout')
            ->where('employee_id', Auth::user()->employee->id)
            ->where('date', date('Y-m-d'))
            ->first();

            $timeEntryNot = TimeTracker::select('date')->whereNull('checkout')
            ->where('employee_id', Auth::user()->employee->id)
            ->where('date', date('Y-m-d'))
            ->first();
            // dd($timeEntry);

            if ($timeEntry)
            {
                $timeEntry->update([
                    'checkout' =>  new DateTime("now", new DateTimeZone('Asia/Karachi')),
                ]);

                $totalTime = TimeTracker::select('checkin', 'checkout')->whereNull('total_hours')
                ->where('employee_id', Auth::user()->employee->id)
                ->where('date', date('Y-m-d'))
                ->first();

                // -------------total time between two Date time with Carbon object
                $start_time = new Carbon($totalTime->checkin);
                $end_time = new Carbon($totalTime->checkout);
                $start_time->format('g:i a');
                $end_time->format('g:i a');
                $total_time = $start_time->diffInHours($end_time). ':' .$start_time->diff($end_time)->format('%I:%S');

                $timeEntry->update([
                    'total_hours' =>  $total_time,
                ]);

                return redirect('/user_account')->with('success', 'CheckOut time has been submited');
            }
            else{
                return redirect('/user_account')->with('success', 'Enter your Previous CheckOut time');
            }
        }

    }
}
