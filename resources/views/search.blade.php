
@extends('layouts.master', ['header_image' => '/images/HomePage/CAREERS-job.png'])


@section('page_banner')
    @include('components.careersBanner')
@endsection


@section('content')
<div class="flex items-center justify-center mt-20 result-search">
            <div
                class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 recent-jobs-container">
               
                <!-- 1 card -->
                
                @if($jobs->isNotEmpty())
                             @foreach ($jobs as $job)

                <div class="relative flex justify-center flex-col">
                    
                    <div
                        class="relative flex justify-center bg-white py-6   w-64 my-4 shadow-xl latest-job TopBorderPanel">

                        <div class="">

    
        <!-- <div class="post-list"> -->
            <p class="text-3xl text-center  my-2 recent-job">{{ $job->job_title  }}</p>
            <div class="flex gap-6 justify-center ">
                                <div class="flex space-x-2 recent-job">
                                    <img src="{{ asset('/images/HomePage/careerLocation.svg') }}">
                                    <p class="time-location text-lg recent-job">{{ $job->location  }}</p>
                                </div>
                                <div class="flex space-x-2 my-3 recent-job">
                                    <img src="{{ asset('/images/HomePage/clock.svg') }}">

                                    <p class="time-location text-lg recent-job">{{$job->type }}</p>
                                </div>
                            </div>
            <p class="inline text-content text-left mb-2 recent-job">{{ $job->description  }}</p>
</div>
        </div>
        <button
                        class="apply mt-2 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg  
                      focus:outline-none focus:shadow-outline focus:bg-white">
                        <span> View & Apply </span><span><img src="{{ asset('/images/HomePage/Apply.svg') }}"></span>
                    </button>
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