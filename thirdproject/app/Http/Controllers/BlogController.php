<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('add-blog');
    }

    public function create(Request $request)
    {
        $this->blog = new Blog();
        $this->blog->title   = $request->title;
        $this->blog->author  = $request->author;
        $this->blog->description = $request->description;
        $this->blog->save();

        return redirect()->back()->with('message', 'student information save successfully');
    }
}
