<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = DB::table('blogs')->get();
        return view('frontend.blog', compact('blogs'));
    }

    public function blog_single($id)
    {
        $blog = DB::table('blogs')->where('id', $id)->first();
        dd($blog)
        return view('frontend.blog-single', compact('blog'));
    }
}
