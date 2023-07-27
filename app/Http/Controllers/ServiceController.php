<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {

        $focus_on_elements = [
            [
                'title' => 'Identifying Revenue Opportunities ',
                'description' => 'We unlock the earning potential of your practice. Our expertise help you identify missed opportunities by analyzing your data and preventing any revenue leakage which will automatically add value to your business.
<br><br>We identify issues, opportunities and trends. Once these concerns have been addressed, we can provide you with analytical tools and help you devise strategies – through revenue cycle management which you can use to assess your practice’s performance and pinpoint areas where you can capture lost.
'
            ],
            ['title' => 'Optimizing Net Revenue', 'description' => 'par 1'],
            ['title' => 'Reducing Cost to Collect', 'description' => 'par 2'],
            ['title' => 'Reducing Rejection Rates ', 'description' => 'par 3']
            
        ];
        //get data

        return view('services')->with(['focus_on_elements'=>$focus_on_elements]);
    }
}
