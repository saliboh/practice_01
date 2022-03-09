<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostBlogRequest;
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
        return view('blogs.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PostBlogRequest $request)
    {
        //NOTE: Can be refactored to use service / repo
        $validatedRequest = $request->validated;

        $blog = new Blog();
        $blog->title = $validatedRequest['title'];
        $blog->content = $validatedRequest['content'];
        $blog->filename = $validatedRequest['filename'] ?? '';
        $blog->type = $validatedRequest['type'];

        return view('home');
    }
}
