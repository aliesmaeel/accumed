<?php
$blogs = \App\Models\Blog::orderBy(DB::raw('blog_title'))->get();
?>
@extends('layouts.master', ['header_image' => '/images/HomePage/blogsBanner.png'])


@section('page_banner')
    @include('components.blogBanner')
@endsection


@section('content')
    <style>
        body {
            background-color: #F4F4F4;

        }
    </style>
<div class="careers-job-section news-events-section">
    
    <h1 class="font-light  text-center my-6 mt-8 text-5xl  careers-job-section"><span class="loc frech">Fresh </span> Perspectives & Insights</h1>

    <!-- component -->
<div class="flex items-center justify-center mt-20 result-search">
<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 recent-jobs-container">
@if($blogs->isNotEmpty())
                             @foreach ($blogs as $blog)
  <!-- 1 card -->
  <div class="relative flex justify-center flex-col article">
      
  <div class="relative flex justify-center w-64 my-4 shadow-xl latest-job ">
      
      
  <img  src="{{asset('/storage/'.$blog->blog_image)}}">

         
          
        

  </div>
  <div class="flex space-between gap-6">
          <div class="date bg-white flex flex-col  text-black justify-center items-center">
          <div clas="calender flex justify-center"> <p class="flex justify-center text-4xl">31</p></div>
              <p class="text-3xl">Mar</p>
</div>
          <div class="post-title flex flex-col justify-center font-bold blog-title"><p>{{$blog->blog_title}}</p>
<div class="flex items-center gap-6 justify-center py-4 lg:justify-start">
          <div class="flex space-x-2 ">
             <img src="{{ asset('/images/HomePage/writer2.svg') }}">
               <p class="time-location text-sm">{{$blog->author}}</p> 
          </div>
          <div class="flex space-x-2 my-3">
          <img src="{{ asset('/images/HomePage/clockNews.svg') }}">
             
               <p class="time-location text-sm">7 minutes </p> 
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