<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
class JobController extends Controller
{
    
    public function search(Request $request)
    {
        $request->validate([
            'job_title' => 'required|string',
            'type'=> 'required|string'
        ]);

        $query=Job::all();

        if(isset($request->job_title )){
            $query = $query->where('job_title',$request->job_title);
        }
        if(isset($request->type )){
            $query = $query->where('type',$request->type);
        }

        return view('search', ['jobs' => $query]);

    }
}

