<?php

namespace App\Http\Controllers;

use App\Http\Requests\Blogs\PostBlogRequest;
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
     * Create new resource
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PostBlogRequest $request)
    {
        //TODO: Can be refactored to use service / repo

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->type = $request->type;
        $blog->filename = $this->handleFileUpload($request);
        $blog->save();

        return redirect()->route('home');
    }

    /**
     * Handles File Upload
     *
     * @return string
     */
    protected function handleFileUpload(PostBlogRequest $request)
    {
        if($request->hasFile('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            $request->file('file')->storeAs('public/images', $fileNameToStore);

            return $fileNameToStore;
        }
    }
}
