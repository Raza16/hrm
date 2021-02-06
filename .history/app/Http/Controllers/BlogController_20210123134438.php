<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\Backend\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = DB::table('blogs')->get();
        return view('backend.cms.blog.list', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.cms.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:blogs|max:255',
            'description' => 'required',
            'featured_image' => 'required|dimensions:width=1100,height=550',
            'author' => 'required|max:255',
            'slug' => 'required|unique:blogs|max:255',
            'meta_title' => 'required|max:255',
            'meta_description' => 'required',
        ]);

        $blog = new Blog;

        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->author = $request->author;
        $blog->slug = $request->slug;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;

        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $name = time().'_'.$image->getClientOriginalName();
            $destinationPath = public_path('/img/blogs');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $blog->featured_image = $name;
        }

        $blog->save();

        return redirect('/cms/blog/create')->with('success', 'Record has been submited');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('backend.cms.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'featured_image' => 'required||dimensions:width=1100,height=550',
            'author' => 'required|max:255',
            'slug' => 'required|max:255',
            'meta_title' => 'required|max:255',
            'meta_description' => 'required',
        ]);
        
        $blog = Blog::find($id);

        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->author = $request->author;
        $blog->slug = $request->slug;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;

        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $name = time().'_'.$image->getClientOriginalName();
            $destinationPath = public_path('/img/blogs');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $old_image = $blog->featured_image;
            $blog->featured_image = $name;

            // "blog-featuredImage" is a custom disk name in config/filesystems.php
            Storage::disk('blog-featuredImage')->delete($old_image);
        }

        $blog->save();
        
        // $request->session()->flash('update', 'Record has been updated');

        return redirect('cms/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        
        // "blog-featuredImage" is a custom disk name in config/filesystems.php
        Storage::disk('blog-featuredImage')->delete($blog->featured_image);

        session()->flash('delete', 'Record has been deleted');
        
        return redirect('/cms/blog'); 
    }

}
