<?php
use App\Models\HomePage;
?>
<!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<style>
    section.ourShows h1 {
        font-family: "BlissPro-Heavy";
        line-height: 24px;
    }

    section.ourShows h2,
    section.ourShows p {
        color: white;
        font-family: "BlissPro-Heavy";

    }

    .ourShows .w-min-content {
        width: min-content;
        
    margin-right: 35px;
    line-height: 19px;
    }

    .ourShows {
        background-image: url("https://accumed.aratech.co/images/HomePage/our_shows_banner.png");

    }

    .ourShows h1 {
        width: max-content;
    }

    .color-green {
        color: #C4D93D !important;
    }

    .ourShows .bg-green {
        background-color: #D5E04D;
        color: white;
        position: relative;
        border-radius: 10.3px;

        display: inline-block;
        padding: 0.2em 10px;
    }

    .pt-28 {
        padding-top: 7rem;
    }

    .myShows {
        padding-top: 55px;
    }

    .ourShows .p-8 p {
        font-size: 12px;
    }

    .ourShows .h-65 {
        /* height: 65%; */
        gap: 9px;
    }
    div.my-service.p-4{
        column-gap: 54px;
    }
    img.our-shows{
        width: 26% !important;
    }
    .max-w-xl {
        max-width: 43rem;
    }
</style>

<section
    class="relative bg-[url('https://accumed.aratech.co/images/HomePage/our_shows_banner.png')]  bg-cover bg-center bg-no-repeat ourShows">
    <div
        class="absolute inset-0 ">
    </div>

    <div
        class="relative flex-col items-center mx-auto  px-4  sm:px-6 lg:flex  lg:items-center lg:px-8 myShows">
        <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right HomepageOurShows">
            <h1 class="text-3xl text-center font-extrabold sm:text-3xl color-green">
                <span class="bg-green"> YOU </span> HANDLE YOUR PATIENTS,<br>
                <span class="bg-green"> WE</span> HANDLE YOUR ADMINISTRATIVE TASKS!

            </h1>
            <p class="text-center mt-4 text-light font-light text-white p-auto line-height-small">We elevate your financial performance
                through change management, business process improvement and innovative technology. Take us as your
                partner that helps you in preventing the abuse within the system to ensure regulatory compliance
                requirements are met.</p>



        </div>
        <div class="flex  grid-cols-1 md:grid-cols-3 my-service p-4">
            <div class="p-8 text-center">
                <div class="flex justify-center items-center  h-65">
                    <img id="" src="{{ asset('/images/HomePage/one.svg') }}" class="our-shows" />
                    <h2 class=" mt-6  font-medium mb-3 text-white text-left w-min-content">
                        {{ $HomePage->firstOurShows }}

                    </h2>
                </div>

                <p class="font-light text-sm text-white mb-3">
                    {{ $HomePage->firstOurShowsDescription }}

                </p>




            </div>

            <div class="p-8 text-center">
                <div class="flex justify-center items-center  h-65">
                    <img id="" src="{{ asset('/images/HomePage/two.svg') }}" class="our-shows" />
                    <h2 class=" mt-6 font-medium mb-3 text-white text-left w-min-content">
                        {{ $HomePage->secondOurShows }}

                    </h2>
                </div>

                <p class="font-light text-sm text-white mb-3">

                    {{ $HomePage->secondOurShowsDescription }}

                </p>

            </div>
            <div class="p-8 text-center">
                <div class="flex justify-center items-center  h-65">
                    <img id="" src="{{ asset('/images/HomePage/three.svg') }}" class="our-shows" />
                    <h2 class=" mt-6 text-white font-medium mb-3 text-left w-min-content">
                        {{ $HomePage->thirdOurShows }}

                    </h2>
                </div>

                <p class="font-light text-sm  mb-3 text-white">

                    {{ $HomePage->thirdOurShowsDescription }}

                </p>

            </div>

        </div>
    </div>
</section>
