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

    public function blogSingle($slug)
    {
        $blog = DB::table('blogs')->where('slug', $slug)->first();
        // dd($blog);

        return view('frontend.blog-single', compact('blog'));
    }
}
