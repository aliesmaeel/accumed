<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\HomePage;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function Home()
    {
        $HomePage=HomePage::where('active',1)->first();
        $Testimonials=Testimonial::all();
        $clients=Client::all();
        return view('Home',compact('HomePage','Testimonials','clients'));
    }
}
