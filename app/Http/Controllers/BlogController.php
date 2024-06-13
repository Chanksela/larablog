<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs/index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Blog $blog)
    {

        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->content = $request->content;
        $blog->thumbnail = $request->file('thumbnail')->store('thumbnail');

        $blog->save();
        return redirect()->route('blog.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blogs/show', ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('blogs/edit', ['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {

        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->content = $request->content;
        Storage::delete($blog->thumbnail);


        $blog->thumbnail = $request->file('thumbnail')->store('thumbnail');

        $blog->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        Storage::delete($blog->thumbnail);
        $blog->delete();
        return back();
    }

    public function editableList()
    {
        $blogs = Blog::all();
        return view('blogs/editableList', ['blogs' => $blogs]);
    }
}
