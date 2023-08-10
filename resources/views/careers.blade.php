@extends('layouts.master', ['header_image' => '/images/HomePage/CAREERS-job.png'])


@section('page_banner')
    @include('components.careersBanner')
@endsection


@section('content')
    <style>
        body {
            background-color: #F4F4F4;

        }
        .loc::before {
            content: " ";
            display: block;
            height: 65%;
            width: 100%;
            margin-left: 3px;
            margin-right: -3px;
            position: absolute;
            background: #D5E04D;
            transform: rotate(2deg);
            top: 12px;
            border-radius: 5px;
            z-index: -1;
        }
        .space-between {
            height: 100%;
            margin: auto;
        }
        select {
            background-image: url("data:image/svg+xml;utf8,<svg fill='gray' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>") !important;
        }
        .rec::before {
            content: " ";
            display: block;
            height: 48%;
            width: 104%;
            margin-left: -4px;
            margin-right: -3px;
            position: absolute;
            background: #D5E04D;
            transform: rotate(2deg);
            top: 26px;
            border-radius: 5px;
            z-index: -1;
        }
        .border-span {
            border: 2px solid #D5E04D;
        }
        .icon {
            width: 20px;
            height: 20px;
        }
    </style>
    <div class="careers-job-section">
        <section class="contactUs careers">
            <h1 class="font-extrabold text-center my-6 mt-8 text-4xl careers-job-section"> <span class="loc">Sea</span>rch
                by role</h1>
            <form action="{{ url('/search') }}" method="post">
                <div class="flex justify-center rounded-xl items-center">
                    <div class=" mx-auto my-4 px-4 lg:px-20">
                        <div
                            class="w-full  my-4  mx-auto md:px-12 lg:w-9/12 pt-8 mr-auto rounded-2xl  bg-white careers-details">
                            <div class="grid grid-cols-1  md:grid-cols-2 pt-4  my-contact">
                                <div class="relative flex items-end">
                                    <p class="career-green pb-[0.1rem]">Search best jobs matching with your profession</p>
                                </div>
                                <div class="flex items-center justify-evenly">
                                    @csrf
                                {{ csrf_field() }}

                <div class="flex">
                    <div>
                <label for="full" class="relative career-type block cursor-pointer select-none rounded-xl  text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">Full Time</label>
                    @csrf
                    <input type="radio" required name="type" value="full" id="full" class="full-part peer  flex m-auto text-sm font-light text-gray-100 p-2 rounded-2xl focus:outline-none ">
                </div>
                </div>

                <div class="flex">
                    <div>
                <label for="part" class="relative career-type block cursor-pointer select-none rounded-xl  text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">Part Time</label>
                <input type="radio" required name="type" value="part" id="part" class="full-part flex m-auto text-sm font-light text-gray-100 p-2 rounded-2xl focus:outline-none "></div>
                </div>
            </div>
                </div>
                            <label for="underline_select" class="label-job-title">Job Title</label>
                            <select name="job_title" id="underline_select"
                                class="job-title city_id_input block py-2.5 px-0 w-full text-lg  bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option selected>---</option>
                                @foreach ($AllJobs as $job)
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

        </form>
        </section>
        <h1 class="font-bold text-center my-6 mt-8 text-5xl careers-job-section"><span class="loc rec">Rec</span>ent Jobs
        </h1>

        <!-- component -->
        <div class="flex  mx-auto my-4 px-4 lg:px-20 ">
            <div
                class="grid grid-cols-1 gap-4 sm:grid-cols-2 w-full md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 ">
                <!-- 1 card -->
                @foreach($RecentCareers as $RecentCareer)
                    <div class="relative px-6 flex justify-center flex-col w-full">
                        <span class="w-1/2 border-span"></span>
                        <div class="relative flex justify-center w-full bg-white shadow-[5px_5px_7px_-1px_rgba(0,0,0,0.3)]">

                            <div class="w-full p-2 text-center">
                                <p class="text-3xl py-3 text-center w-full  recent-job">{{ $RecentCareer->job_title }}</p>
                                <div class="flex py-3  justify-center">
                                    <div class="flex space-x-2 recent-job  items-center ">
                                        <img class="icon" src="{{ asset('/images/HomePage/careerLocation.svg') }}">
                                        <p class=" text-lg recent-job">{{$RecentCareer->location }}</p>
                                    </div>
                                    <div class="flex space-x-2 items-center pl-10">
                                        <img class="icon" src="{{ asset('/images/HomePage/clock.svg') }}">
                                        <p class=" text-lg recent-job">{{$RecentCareer->type}}</p>
                                    </div>
                                </div>
                                <p class="text-content text-left mb-2 recent-job p-1">{{ Str::limit($RecentCareer->description, 300) }}</p>


                            </div>

                        </div>
                        <a href="{{$RecentCareer->link}}"  class="apply-a mt-5 flex mx-auto  text-sm  font-light
                        text-[#333333] p-1 rounded-2xl focus:outline-none focus:shadow-outline focus:bg-white">
                            <span style="padding: 3%"> View & Apply </span><span>
                                <img style="width: 90%; height: 90%" src="{{ asset('/images/HomePage/Apply.svg') }}">
                            </span>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
        @include('components.organization')
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
