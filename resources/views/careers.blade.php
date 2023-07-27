<?php
$job = \App\Models\Job::orderBy(DB::raw('job_title'))->get();
?>
@extends('layouts.master', ['header_image' => '/images/HomePage/CAREERS-job.png'])


@section('page_banner')
    @include('components.careersBanner')
@endsection


@section('content')
    <style>
        body {
            background-color: #F4F4F4;

        }
    </style>
    <div class="careers-job-section">
        <section class="contactUs careers">
            <h1 class="font-extrabold text-center my-6 mt-8 text-4xl careers-job-section"> <span class="loc">Sea</span>rch
                by role</h1>
            <form action="{{ url('/search') }}" method="post">
                <div class="flex justify-center rounded-xl items-center">
                    <div class="container mx-auto my-4 px-4 lg:px-20">
                        <div
                            class="w-full  my-4  mx-auto md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-xl bg-white careers-details">
                            <div class="grid grid-cols-1  md:grid-cols-2  my-contact">
                                <div class="relative ">
                                    <p class="career-green">Search best jobs matching with your profession</p>
                                </div>
                                <div class="relative ">
                                    @csrf
                                    <div class="flex choose">
                                        {{ csrf_field() }}
                                        <div class="flex space-between">
                                        <label for="full" class="career-type block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">Full Time</label>

                                        <input type="radio" required name="type" value="full" id="full"
                                            class="full-part peer  flex mx-auto text-sm font-light text-gray-100 p-3 rounded-2xl focus:outline-none ">
    </div>
    <div class="flex space-between">
                                            <label for="part" class="career-type block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">Part Time</label>
    
    
                                        <input type="radio" required name="type" value="part"
                                            class="full-part flex mx-auto text-sm font-light text-gray-100 p-3 rounded-2xl focus:outline-none ">
    </div>
                                        </div>
                                </div>
                            </div>
                            <label for="underline_select" class="label-job-title">Job Title</label>
                            <select name="job_title" id="underline_select"
                                class="job-title city_id_input block py-2.5 px-0 w-full text-lg  bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option selected>Revenue Cycle Management Manager</option>
                                @foreach ($job as $job)
                                    <option value="{{ $job->job_title }}">{{ $job->job_title }}</option>
                                @endforeach
                            </select>
                            <div class="my-6 w-1/2 lg:w-1/4">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="flex mx-auto uppercase text-sm font-light text-gray-100 p-3 rounded-lg focus:outline-none focus:shadow-outline focus:bg-white find-jobs">
                    FIND JOBS
                </button>
        </section>
        </form>
        <h1 class="font-bold text-center my-6 mt-8 text-5xl careers-job-section"><span class="loc">Rec</span>ent Jobs
        </h1>

        <!-- component -->
        <div class="flex items-center justify-center mt-20">
            <div
                class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 recent-jobs-container">
                <!-- 1 card -->
                <div class="relative flex justify-center flex-col">
                    <div
                        class="relative flex justify-center bg-white py-6  w-64 my-4 shadow-xl latest-job TopBorderPanel">

                        <div class="">
                            <p class="text-3xl text-center  my-2 recent-job">RCM Manager</p>
                            <div class="flex gap-6 justify-center">
                                <div class="flex space-x-2 recent-job ">
                                    <img src="{{ asset('/images/HomePage/careerLocation.svg') }}">
                                    <p class="time-location text-lg recent-job">Riyadh, KSA</p>
                                </div>
                                <div class="flex space-x-2 my-3">
                                    <img src="{{ asset('/images/HomePage/clock.svg') }}">

                                    <p class="time-location text-lg recent-job">Full time</p>
                                </div>
                            </div>
                            <p class="inline text-content text-left mb-2 recent-job">Lorem ipsum dolor sit Lorem ipsum dolor sit amet,
                                consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
                                iriure dolor in hendrerit in </p>


                        </div>

                    </div>
                    <button
                        class="apply mt-2 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg  
                      focus:outline-none focus:shadow-outline focus:bg-white">
                        <span> View & Apply </span><span><img src="{{ asset('/images/HomePage/Apply.svg') }}"></span>
                    </button>
                </div>
                <!-- 2 card -->
                <div class="relative flex justify-center flex-col">
                    <div
                        class="relative flex justify-center bg-white py-6  w-64 my-4 shadow-xl latest-job TopBorderPanel">

                        <div class="">
                            <p class="text-3xl text-center  my-2 recent-job">RCM Manager</p>
                            <div class="flex gap-6 justify-center">
                                <div class="flex space-x-2 recent-job ">
                                    <img src="{{ asset('/images/HomePage/careerLocation.svg') }}">
                                    <p class="time-location text-lg recent-job">Riyadh, KSA</p>
                                </div>
                                <div class="flex space-x-2 my-3">
                                    <img src="{{ asset('/images/HomePage/clock.svg') }}">

                                    <p class="time-location text-lg recent-job">Full time</p>
                                </div>
                            </div>
                            <p class="inline text-content text-left mb-2 recent-job">Lorem ipsum dolor sit Lorem ipsum dolor sit amet,
                                consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
                                iriure dolor in hendrerit in </p>


                        </div>

                    </div>
                    <button
                        class="apply mt-2 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg  
                      focus:outline-none focus:shadow-outline focus:bg-white">
                        <span> View & Apply </span><span><img src="{{ asset('/images/HomePage/Apply.svg') }}"></span>
                    </button>
                </div>

                <!-- 3 card -->
                <div class="relative flex justify-center flex-col">
                    <div
                        class="relative flex justify-center bg-white py-6  w-64 my-4 shadow-xl latest-job TopBorderPanel">

                        <div class="">
                            <p class="text-3xl text-center  my-2 recent-job">RCM Manager</p>
                            <div class="flex gap-6 justify-center">
                                <div class="flex space-x-2 recent-job ">
                                    <img src="{{ asset('/images/HomePage/careerLocation.svg') }}">
                                    <p class="time-location text-lg recent-job">Riyadh, KSA</p>
                                </div>
                                <div class="flex space-x-2 my-3">
                                    <img src="{{ asset('/images/HomePage/clock.svg') }}">

                                    <p class="time-location text-lg recent-job">Full time</p>
                                </div>
                            </div>
                            <p class="inline text-content text-left mb-2 recent-job">Lorem ipsum dolor sit Lorem ipsum dolor sit amet,
                                consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
                                iriure dolor in hendrerit in </p>


                        </div>

                    </div>
                    <button
                        class="apply mt-2 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg  
                      focus:outline-none focus:shadow-outline focus:bg-white">
                        <span> View & Apply </span><span><img src="{{ asset('/images/HomePage/Apply.svg') }}"></span>
                    </button>
                </div>

                <!-- 4 card -->
                <div class="relative flex justify-center flex-col">
                    <div
                        class="relative flex justify-center bg-white py-6  w-64 my-4 shadow-xl latest-job TopBorderPanel">

                        <div class="">
                            <p class="text-3xl text-center  my-2 recent-job">RCM Manager</p>
                            <div class="flex gap-6 justify-center">
                                <div class="flex space-x-2 recent-job ">
                                    <img src="{{ asset('/images/HomePage/careerLocation.svg') }}">
                                    <p class="time-location text-lg recent-job">Riyadh, KSA</p>
                                </div>
                                <div class="flex space-x-2 my-3">
                                    <img src="{{ asset('/images/HomePage/clock.svg') }}">

                                    <p class="time-location text-lg recent-job">Full time</p>
                                </div>
                            </div>
                            <p class="inline text-content text-left mb-2 recent-job">Lorem ipsum dolor sit Lorem ipsum dolor sit amet,
                                consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
                                iriure dolor in hendrerit in </p>


                        </div>

                    </div>
                    <button
                        class="apply mt-2 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg  
                      focus:outline-none focus:shadow-outline focus:bg-white">
                        <span> View & Apply </span><span><img src="{{ asset('/images/HomePage/Apply.svg') }}"></span>
                    </button>
                </div>
                <!-- card 5 -->
                <div class="relative flex justify-center flex-col">
                    <div
                        class="relative flex justify-center bg-white py-6  w-64 my-4 shadow-xl latest-job TopBorderPanel">

                        <div class="">
                            <p class="text-3xl text-center  my-2 recent-job">RCM Manager</p>
                            <div class="flex gap-6 justify-center">
                                <div class="flex space-x-2 recent-job ">
                                    <img src="{{ asset('/images/HomePage/careerLocation.svg') }}">
                                    <p class="time-location text-lg recent-job">Riyadh, KSA</p>
                                </div>
                                <div class="flex space-x-2 my-3">
                                    <img src="{{ asset('/images/HomePage/clock.svg') }}">

                                    <p class="time-location text-lg recent-job">Full time</p>
                                </div>
                            </div>
                            <p class="inline text-content text-left mb-2 recent-job">Lorem ipsum dolor sit Lorem ipsum dolor sit amet,
                                consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
                                iriure dolor in hendrerit in </p>


                        </div>

                    </div>
                    <button
                        class="apply mt-2 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg  
                      focus:outline-none focus:shadow-outline focus:bg-white">
                        <span> View & Apply </span><span><img src="{{ asset('/images/HomePage/Apply.svg') }}"></span>
                    </button>
                </div>
                <!--  -->
                <div class="relative flex justify-center flex-col">
                    <div
                        class="relative flex justify-center bg-white py-6  w-64 my-4 shadow-xl latest-job TopBorderPanel">

                        <div class="">
                            <p class="text-3xl text-center  my-2 recent-job">RCM Manager</p>
                            <div class="flex gap-6 justify-center">
                                <div class="flex space-x-2 recent-job ">
                                    <img src="{{ asset('/images/HomePage/careerLocation.svg') }}">
                                    <p class="time-location text-lg recent-job">Riyadh, KSA</p>
                                </div>
                                <div class="flex space-x-2 my-3">
                                    <img src="{{ asset('/images/HomePage/clock.svg') }}">

                                    <p class="time-location text-lg recent-job">Full time</p>
                                </div>
                            </div>
                            <p class="inline text-content text-left mb-2 recent-job">Lorem ipsum dolor sit Lorem ipsum dolor sit amet,
                                consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
                                iriure dolor in hendrerit in </p>


                        </div>

                    </div>
                    <button
                        class="apply mt-2 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg  
                      focus:outline-none focus:shadow-outline focus:bg-white">
                        <span> View & Apply </span><span><img src="{{ asset('/images/HomePage/Apply.svg') }}"></span>
                    </button>
                </div>
            </div>
        </div>
        @include('components.organization')

        </section>
    @endsection
    <!-- <script>
        $(document).on('click', '.submitForm', function() {
            let getForm = $(this).parents('form');
            let getFormActionUrl = getForm.attr('action');
            $.ajax({
                url: getFormActionUrl,
                .....
                .....
                .....
                .....
                .....
            });
        });
    </script> -->
    <script>
        function select_function() {
            // document.querySelector('.category_id_input').value = document.querySelector('.category_id_input').options[document.querySelector('.category_id_input').selectedIndex].value;
            document.querySelector('.city_id_input').value = document.querySelector('.city_id_input').options[document
                .querySelector('.city_id_input').selectedIndex].value;
        }
    </script>
