<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogRequests;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Blog = Blog::all();
        return view('Blog.Show_blog' , ['post' => $Blog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Blog.Create_blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequests $request)
    {
        $Blog = Blog::create([
            'name' => $request->name,
            'blog_title' => $request->blog_title,
            'content' => $request->content,
            'genre' => $request->genre,
            'published_at' => $request->published_at,
        ]);
        if ($request->ajax()) {
            return response()->json($Blog);
        }
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Blog = Blog::find($id);
        return view('Blog.View_blog' , ['posts' => $Blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Blog = Blog::find($id);
        return view('Blog.Edit_blog', ['Blog'=> $Blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $Blog = Blog::find($request->id);
        $Blog->name = $request->name;
        $Blog->blog_title = $request->blog_title;
        $Blog->content = $request->content;
        $Blog->genre = $request->genre;
        $Blog->published_at = $request->published_at;
        $Blog->save();
        
        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Blog = Blog::findOrFail($id);
        $Blog->delete();

        return redirect('/blog')->with('msg' , 'Deleted Successfully'); 
    }
}
