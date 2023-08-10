<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Models\Job;

class ReportsController extends Controller
{
    public function Reports()
    {
        $AllReports=Report::orderBy('created_at','desc')->paginate();

        return view('report',compact('AllReports'));
    }
}

