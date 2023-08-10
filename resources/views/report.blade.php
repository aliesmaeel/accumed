
@extends('layouts.master', ['header_image' => '/images/HomePage/reportBanner.png'])


@section('page_banner')
    @include('components.reportBanner')
@endsection


@section('content')
    <style>

        body {
            background-color: #F4F4F4;

        }

       .reports .flex.space-x-2{
    align-self: center;
    width: max-content;
          }

        img, video {
            max-width: 80%;
        }
    </style>
<div class="careers-job-section news-events-section reports">
    
    <h1 class="font-light  text-center my-6 mt-8 text-5xl  careers-job-section"><span class="loc">From </span> Our Reports Collection</h1>

    <!-- component -->
<div class="grid items-center justify-center mt-20">
<div class="recent-jobs-container report">
@if($AllReports->isNotEmpty())
        @foreach ($AllReports as $report)

  <div class="flex justify-center my-4">
  <div class="flex gap-6 space-between mt-8">
      <div class="date absolute bg-white flex flex-col  text-black justify-center items-center ml-2" style="width: max-content;height: max-content">
          <div clas="calender flex justify-center" style="width: 100%" > <p class="flex justify-center text-4xl">{{$report->created_at->day}}</p></div>
          <p class="text-3xl">{{$report->created_at->format('F')}}</p>
      </div>
      <img src="{{asset('/storage/'.$report->image)}}">
   <div class="post-title flex flex-col justify-center font-bold text-center items-center">
    <p class="report-title" >{{$report->report_title}}</p>
<div class="flex gap-6 justify-center  lg:justify-start">
          <div class="flex space-x-2 ">
             <img src="{{ asset('/images/HomePage/writer2.svg') }}">
               <p class="time-location text-sm">{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
          </div>
          <div class="flex space-x-2 my-3">
          <img src="{{ asset('/images/HomePage/clockNews.svg') }}">
               <p class="time-location text-sm">{{$report->created_at->diffForHumans(\Illuminate\Support\Carbon::now())}}</p>
          </div>
         </div>
         <button class="apply mt-2 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg  
                focus:outline-none focus:shadow-outline focus:bg-white">
               Read More 
    </button>
  </div>

    </div>
    </div>
  @endforeach
</div>
@else 
    <div>
        <h2>No jobs found</h2>
    </div>
@endif
    </div>
   
    </div>

    @include('components.organization')

@endsection