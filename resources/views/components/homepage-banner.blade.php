@php

use App\Models\HomePage;

@endphp

<style>
        nav {
            padding-top: 42px;
        }
        header {
            display: block;
        }
        .text-white {
            color: white !important;
        }
        .w-auto {
            width: auto;
        }
        .dropdown:hover>.dropdown-content {
            display: block;
        }
        #one ul {
            z-index: 2;
            width: max-content;
            border-radius: 6px;
        }
        .org.header-nav {
            background-image: url('https://accumed.aratech.co/images/HomePage/MainBanner2.png') !important;
            height: unset;
            margin: auto;
        }
        .pb-28 {
            padding-bottom: 7rem;
        }
        .dropdown:hover>.dropdown-content {
            display: block;
        }

        .heavy-font {
            font-family: "BlissPro-Heavy";
        }
        .line-height-small{
            line-height: 18px !important;
        }
        .hero .text-3xl{
              word-spacing: 0px;
              line-height: 48px;
              font-size: 42px;
              font-family: "BlissPro-Medium" !important;
              font-weight: bold;
        }
        .hero-with-sub{
            padding-top: 78px;
            padding-bottom: 60px;
        }
        #one li{
        font-size: 12px;
    font-weight: 100;
        }
    </style>


    <div class="relative mx-auto px-32 py-32 sm:px-18 lg:flex lg:h-screen lg:items-center lg:px-18 pt-28 pb-28 hero">
        <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right hero-with-sub">

            <h1 class="text-3xl font-light sm:text-5xl text-white mb-4 text-left"><span class="color-green">
                    Maximize </span>Your Revenue While Optimizing Healthcare Quality
            </h1>
            <p class="text-white text-left line-height-small">{{ $HomePage->hero_text }}</p>
            <div class="mt-8 flex gap-4 text-center call-write-button justify-flex-start">
                <a href="#" class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-black shadow hover:bg-rose-700 focus:outline-none   sm:w-auto hover:bg-green-500  hover:text-white">
                    Our Services
                </a>
                <a href="#" class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-black shadow hover:bg-rose-700 focus:outline-none   sm:w-auto hover:bg-green-500  hover:text-white">
                    Schedule A Call
                </a>
            </div>
        </div>
    </div>