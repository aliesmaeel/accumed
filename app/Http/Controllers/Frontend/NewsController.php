<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\News;


class NewsController extends Controller
{
    public function News()
    {
        $AllNews=News::orderBy('created_at','DESC')->get();

        return view('News',compact('AllNews'));
    }
}
