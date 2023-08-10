<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class CareersController extends Controller
{
    public function Careers()
    {
        $AllJobs=Job::all();
        $RecentCareers=Job::orderBy('created_at','desc')->take(10)->get();

        return view('careers',compact('RecentCareers','AllJobs'));

    }
}

