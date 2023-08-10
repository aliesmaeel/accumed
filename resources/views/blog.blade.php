@extends('layouts.master', ['header_image' => '/images/HomePage/blogsBanner.png'])


@section('page_banner')
    @include('components.blogBanner')
@endsection


@section('content')
    <style>
        body {
            background-color: #F4F4F4;

        }
        .date {
            width: fit-content;
            height: fit-content;
        }
        .fixed_div{
            height: 200px;
            width: 100%;
        }
        .fixed_div img {
            width:100%;
            height:100%;
        }
        .result-search {
            margin: 5rem 55px;
        }

        .loc::before {
            height: 100%;
            top: 2px;
            width: 93%;
        }
        .time-location {
        padding-left: 0px;
        }
        .space-x-2 > :not([hidden]) ~ :not([hidden]) {
            margin-left: calc(.2rem * calc(1 - var(--tw-space-x-reverse)));
        }
        .frech::before{
            height: 50% !important;
            top: 22px !important;
            left: 6px !important;
        }
        .contactUs button, .careers button, .recent-jobs-container button, button.view
        {
            padding: 5px;
        }
    </style>
<div class="careers-job-section news-events-section">
    
    <h1 class="font-light  text-center my-6 mt-8 text-5xl  careers-job-section"><span class="loc frech">Fresh </span> Perspectives & Insights</h1>

    <!-- component -->
<div class="flex items-center justify-center mt-20 result-search">
<div class="grid sm:grid-cols-1 lg:grid-cols-2  grid-cols-1 gap-4 w-full recent-jobs-container">
@if($AllBlogs->isNotEmpty())
    @foreach ($AllBlogs as $blog)
  <!-- 1 card -->
  <div class="relative flex justify-center flex-col ">
  <div class="relative flex justify-center  my-4 shadow-xl fixed_div h-auto w-full ">
  <img  src="{{asset('/storage/'.$blog->blog_image)}}">
  </div>
  <div class="flex space-between gap-6">
          <div class="date bg-white flex flex-col  text-black justify-center items-center">
          <div clas="calender flex justify-center" style="width: 100%">
              <p class="flex justify-center text-4xl px-3">{{$blog->created_at->day}}</p></div>
              <p class="text-3xl">{{substr($blog->created_at->format('F'),0,3)}}</p>
        </div>

      <div class="post-title flex flex-col justify-center font-bold blog-title">
          <p>
              <?php
              $title = explode(' ', trim($blog->blog_title))[0] .' '. explode(' ',trim($blog->blog_title))[1];
              ?>
              <span class="loc">{{$title}} </span> {{substr(strstr($blog->blog_title," "), 2)}}
          </p>

<div class="flex items-center gap-6 justify-center py-4 lg:justify-start">
          <div class="flex space-x-2 ">
             <img src="{{ asset('/images/HomePage/writer2.svg') }}">
               <p class="time-location text-sm">{{$blog->author}}</p> 
          </div>
          <div class="flex space-x-2 my-3">
          <img src="{{ asset('/images/HomePage/clockNews.svg') }}">
             
               <p class="time-location text-sm">{{$blog->created_at->diffForHumans(\Illuminate\Support\Carbon::now())}}</p>
          </div>
         </div>
          </div>

      </div>
      <div class="separator">
      <div class="line"></div>
  <button class="read-more mt-2 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg  
                focus:outline-none focus:shadow-outline focus:bg-white">
               Read More 
    </button>
    <div class="line"></div>
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