<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        //TODO: to refactor and use service/repo
        $blogs = Blog::query()
            ->when(isset($request->filter), function ($query) use ($request) {
                $query->where('type', $request->filter);
            })
            ->get();

        return view('home')->with('blogs', $blogs);
    }
}
