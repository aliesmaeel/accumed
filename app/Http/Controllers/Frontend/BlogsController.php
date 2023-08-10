<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Job;

class BlogsController extends Controller
{
    public function Blogs()
    {

        $AllBlogs = Blog::orderBy('blog_title')->get();
        return view('blog',compact('AllBlogs'));

    }
}

