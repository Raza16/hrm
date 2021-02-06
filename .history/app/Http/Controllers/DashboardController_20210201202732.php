<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('backend/dashboard/index');
    }
}
