<?php
$reports = \App\Models\Report::orderBy(DB::raw('report_title'))->get();
?>
@extends('layouts.master', ['header_image' => '/images/HomePage/reportBanner.png'])


@section('page_banner')
    @include('components.reportBanner')
@endsection


@section('content')
    <style>
        body {
            background-color: #F4F4F4;

        }
        .reports .my-4{
            /* width: 736.9938px;
    margin: auto -25% */
    width: 630.9938px;
    margin: auto -32%;
    margin-bottom: 119px !important;
        }
        .reports   .report-title{
            width: 170%;
            font-size: 15.49pt;
            line-height: initial;
        }
       .reports .flex.space-x-2{
    align-self: center;
    width: max-content;
          }
          img.report{
            /* display: grid; */
            margin-left: -59px;
          }
    </style>
<div class="careers-job-section news-events-section reports">
    
    <h1 class="font-light  text-center my-6 mt-8 text-5xl  careers-job-section"><span class="loc">From </span> Our Reports Collection</h1>

    <!-- component -->
<div class="grid items-center justify-center mt-20">
<div class="recent-jobs-container report">
@if($reports->isNotEmpty())
                             @foreach ($reports as $report)
  <!-- 1 card -->
  <!-- <div class="relative flex justify-center  article">
      
  <div class="relative flex justify-center    w-64 my-4 shadow-xl latest-job ">
  <div class="flex space-between gap-6">
          <div class="date bg-white flex flex-col  text-black justify-center items-center">
          <div clas="calender flex justify-center"> <p class="flex justify-center text-3xl">31</p></div>
              <p clas="">march</p>
</div>
      
  <img src="{{ asset('/images/HomePage/imgReport.png') }}">

         
          
        

  </div>

          <div class="post-title flex flex-col justify-center font-bold"><p>{{$report->report_title}}</p>
<div class="flex gap-6 justify-center py-4 lg:justify-start">
          <div class="flex space-x-2 ">
             <img src="{{ asset('/images/HomePage/writerName.svg') }}">
               <p class="time-location text-sm">Zawya</p> 
          </div>
          <div class="flex space-x-2 my-3">
          <img src="{{ asset('/images/HomePage/clockNews.svg') }}">
             
               <p class="time-location text-sm">7 minutes </p> 
          </div>
         </div>
</div>
      </div>

  <button class=" mt-2 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg  
                focus:outline-none focus:shadow-outline focus:bg-white">
               Read More 
    </button>
  </div> -->
  <div class="flex justify-center my-4">

  <div class="flex gap-6 space-between mt-8">
  <div class="date bg-white flex flex-col  text-black justify-center items-center">
          <div clas="calender flex justify-center"> <p class="flex justify-center text-4xl">31</p></div>
              <p class="text-3xl">Mar</p>
</div>

  <img src="{{ asset('/images/HomePage/imgReport.png') }}"  class="report">

   <div class="post-title flex flex-col justify-center font-bold">
    <p class="report-title" >{{$report->report_title}}</p>
<div class="flex gap-6 justify-center  lg:justify-start">
          <div class="flex space-x-2 ">
             <img src="{{ asset('/images/HomePage/writer2.svg') }}">
               <p class="time-location text-sm">ACCUMED</p> 
          </div>
          <div class="flex space-x-2 my-3">
          <img src="{{ asset('/images/HomePage/clockNews.svg') }}">
             
               <p class="time-location text-sm">15 minutes  </p> 
          </div>
         </div>
         <button class="apply mt-2 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg  
                focus:outline-none focus:shadow-outline focus:bg-white">
               Read More 
    </button>
  </div>
    </div>
    </div>
    </div>
  @endforeach
@else 
    <div>
        <h2>No jobs found</h2>
    </div>
@endif
    </div>
   
    </div>

    @include('components.organization')

@endsection