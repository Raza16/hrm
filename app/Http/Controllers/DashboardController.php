<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalEmployees = DB::table('employees')->count();
        $totalClients = DB::table('clients')->count();
        $totalTasks = DB::table('tasks')->count();
        $totalTasksProcess = DB::table('tasks')->where('status', 'process')->count();
        $totalTasksCompleted = DB::table('tasks')->where('status', 'completed')->count();
        $totalProjects = DB::table('projects')->count();
        $processProjects = DB::table('projects')->where('status', 'process')->count();
        $pendingProjects = DB::table('projects')->where('status', 'pending')->count();
        $completedProjects = DB::table('projects')->where('status', 'completed')->count();

        $projectStatus = DB::table('tasks')
        ->join('projects', 'projects.id', '=', 'tasks.project_id')
        ->select('projects.id','projects.title', DB::raw('COUNT(tasks.status) as count_status'))
        ->where('tasks.status', 'completed')
        ->groupBy('projects.id','projects.title')
        ->get();

        // $countProjectTask = DB::table('tasks')
        // ->join('projects', 'projects.id', '=', 'tasks.project_id')
        // ->select('projects.id','projects.title', DB::raw('COUNT(tasks.project_id) as count_project_task'))
        // // ->where('tasks.status', 'completed')
        // ->groupBy('projects.id','projects.title')
        // ->get();



        // $totalProjectTask = DB::table('tasks')->where('project_id', 2)->count();
        // dd($totalProjectTask);

        // $projectStatus = DB::table('tasks')
        // ->join('projects', 'projects.id', '=', 'tasks.project_id')
        // ->select('projects.title', DB::raw('COUNT(tasks.status) as count_status'))
        // ->where('projects.id', )
        // ->groupBy('projects.title')
        // ->get();

        // dd($projectStatus);

        return view('backend/dashboard/index', compact(
            'totalEmployees',
            'totalClients',
            'totalProjects',
            'totalTasks',
            'totalTasksProcess',
            'totalTasksCompleted',
            'processProjects',
            'pendingProjects',
            'completedProjects',
            'projectStatus',
            // 'countProjectTask'
        ));
    }
}
