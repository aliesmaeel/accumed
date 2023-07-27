@extends('layouts.master', ['header_image' => '/images/HomePage/CAREERS-job.png'])


@section('page_banner')
    @include('components.careersBanner')
@endsection


@section('content')



                <!-- 1 card -->
                <div class="relative flex justify-center flex-col">
                    <div
                        class="relative flex justify-center bg-white py-6 px-6  w-64 my-4 shadow-xl latest-job TopBorderPanel">

                        <div class="">
                            
                         @if($jobs->isNotEmpty())
                                @foreach ($jobs as $job)
                            <p class="text-3xl text-center font-bold my-2">{{job->job_title}}</p>
                            <div class="flex gap-6 justify-center py-4">
                                <div class="flex space-x-2 ">
                                    <img src="{{ asset('/images/HomePage/careerLocation.svg') }}">
                                    <p class="time-location text-xl">{{job->location}}</p>
                                </div>
                                <div class="flex space-x-2 my-3">
                                    <img src="{{ asset('/images/HomePage/clock.svg') }}">

                                    <p class="time-location text-xl">{{job->type}}</p>
                                </div>
                            </div>
                            <p class="inline text-content text-left mb-2">{{job->description}} </p>
  
</div>

                        </div>

                    </div>
                    
                    <!-- <button
                        class="apply mt-2 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg  
                      focus:outline-none focus:shadow-outline focus:bg-white">
                        <span> View & Apply </span><span><img src="{{ asset('/images/HomePage/Apply.svg') }}"></span>
                    </button> -->
                    @endforeach
@else 
    <div>
        <h2>No jobs found</h2>
    </div>
@endif

@endsection


  



