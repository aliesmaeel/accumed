<?php
use App\Models\GetInTouch;

?>

<!-- component -->
<!-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css"> -->
<!-- <link rel="stylesheet"
    href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"> -->
<style>
    .width-auto {
        width: auto;
    }

    footer {
        background-color: #4C655C !important;
        color: white !important;
    }

    footer span,
    footer ul,
    .text-blueGray-600 {
        color: white !important;

    }

    footer .title {
        font-family: "Nexa-Bold";
        font-size: 17px;
        width: max-content;
    }

    .sm-title {
        font-family: "Nexa-Bold" !important;
        font-size: 12px !important;
        width: max-content;

    }

    .logo-footer {
        margin-left: 43px;
        margin-top: 28px;
    }

    @media(max-width: 640px) {
        .rest-footer {
            display: flex;
            flex-wrap: wrap;
        }

        .rest-footer div {
            padding-top: 35px;
        }

    }

    ul.getINtouch {
        width: 210px;
    }

    ul.getINtouch li {
        display: flex;

        /* align-items: start; */
        gap: 10px;
        align-items: baseline;

        gap: 12px;
    }

    .line-under {
        border-bottom: 2px solid;
    }

    /* @media only screen and (min-width: 640px) {
      .rest-footer{
        display: flex;
        flex-wrap:wrap;
      }
    } */
</style>
<footer class="relative bg-blueGray-200 pt-20 pb-6">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row text-left lg:text-left ">
            <div class="w-full width-auto lg:w-6/12 px-4 logo-footer" id="footer">

                <img id="" src="{{ asset('/images/HomePage/logo-footer.svg') }}" class="" />

            </div>
            <div class="w-full lg:w-6/12 px-4 width-auto">
                <div class="flex items-top mb-6 rest-footer">
                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                        <span class="block font-semibold text-blueGray-500 text-sm  mb-2 title"><span
                                class="line-under">Get in </span> Touch</span>
                        <ul class="list-unstyled getINtouch">
                            <li>
                                <img src="{{ asset('/images/HomePage/location-icon.svg') }}">
                                <a
                                    class="text-blueGray-600 hover:text-blueGray-800  block pb-2 text-sm sm-title">{{ GetInTouch::firstOrFail()->site }}</a>
                            </li>
                            <li>
                                <img src="{{ asset('/images/HomePage/email-icon.svg') }}">
                                <a
                                    class="text-blueGray-600 hover:text-blueGray-800  block pb-2 text-sm sm-title">{{ GetInTouch::firstOrFail()->email }}</a>
                            </li>
                            <li>
                                <img src="{{ asset('/images/HomePage/phone-icon.svg') }}">
                                <a
                                    class="text-blueGray-600 hover:text-blueGray-800  block pb-2 text-sm sm-title">{{ GetInTouch::firstOrFail()->phone }}</a>
                            </li>

                        </ul>
                    </div>
                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                        <span class="block  text-blueGray-500 text-sm font-semibold mb-2 title">Company</span>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-blueGray-600 hover:text-blueGray-800  block pb-2 text-sm sm-title">About
                                    Us</a>
                            </li>
                            <li>
                                <a
                                    class="text-blueGray-600 hover:text-blueGray-800  block pb-2 text-sm sm-title">Leadership</a>
                            </li>
                            <li>
                                <a
                                    class="text-blueGray-600 hover:text-blueGray-800  block pb-2 text-sm sm-title">Investors</a>
                            </li>
                            <li>
                                <a class="text-blueGray-600 hover:text-blueGray-800  block pb-2 text-sm sm-title">People
                                    and Culture
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                        <span class="block  text-blueGray-500 text-sm font-semibold mb-2 title">Services</span>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-blueGray-600 hover:text-blueGray-800  block pb-2 text-sm sm-title">Revenue
                                    Cycle Management
                                </a>
                            </li>
                            <li>
                                <a
                                    class="text-blueGray-600 hover:text-blueGray-800  block pb-2 text-sm sm-title">Consulting</a>
                            </li>
                            <li>
                                <a class="text-blueGray-600 hover:text-blueGray-800  block pb-2 text-sm sm-title">Health
                                    Informatics & Technology</a>
                            </li>
                            <li>
                                <a class="text-blueGray-600 hover:text-blueGray-800  block pb-2 text-sm sm-title">Pricing
                                    & Contracting

                                </a>
                            </li>
                            <li>
                                <a class="text-blueGray-600 hover:text-blueGray-800  block pb-2 text-sm sm-title">Training

                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                        <span class="block  text-blueGray-500 text-sm font-semibold mb-2 title">Media Center</span>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-blueGray-600 hover:text-blueGray-800  block pb-2 text-sm sm-title"
                                    href="">News & Events</a>
                            </li>
                            <li>
                                <a class="text-blueGray-600 hover:text-blueGray-800  block pb-2 text-sm sm-title"
                                    href="">Blogs</a>
                            </li>
                            <li>
                                <a class="text-blueGray-600 hover:text-blueGray-800  block pb-2 text-sm sm-title"
                                    href="">Vision 2030</a>
                            </li>
                            <li>
                                <a class="text-blueGray-600 hover:text-blueGray-800  block pb-2 text-sm sm-title"
                                    href="">Reports
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                        <span class="block  text-blueGray-500 text-sm font-semibold mb-2 title">Clients</span>

                    </div>
                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                        <span class="block  text-blueGray-500 text-sm font-semibold mb-2 title">Careers</span>

                    </div>



                </div>
            </div>
        </div>
        <hr class="my-6 border-blueGray-300">
        <div class="flex flex-wrap items-center md:justify-between justify-center my-icon">
            <div class="">
                <div class="text-sm  font-semibold py-1">
                    Copyright © <span id="get-current-year">2023 </span><a href="" class=" hover:text-gray-800"
                        target="_blank"> ACCUMED,
                        <a href="" class="hover:text-blueGray-800">
                            All rights reserved.</a>.
                </div>

            </div>
            <div class="mt-6 lg:mb-0 mb-6 flex">
                <!-- <button class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button"> -->

                <img src="{{ asset('/images/HomePage/TWITTER.svg') }}" class="iconFooter">
                <img src="{{ asset('/images/HomePage/likedIN.svg') }}" class="iconFooter">

                <img src="{{ asset('/images/HomePage/INSTA.svg') }}">

                <!-- </button> -->
            </div>
        </div>
    </div>
</footer>
