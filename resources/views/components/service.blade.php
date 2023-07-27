<?php
use App\Models\HomePage;
?>
<style>
    .secion-service {
        background-color: #F4F4F4;
        padding-top: 75px;
    padding-bottom: 26px;
    }

    img.services {
        width: 60% !important;
        margin: auto;
    }

    .my-service h2,
    .my-service p {
        color: #333333;
        /* font-family: "BlissPro-Heavy"; */

    }

    .my-service {
        justify-content: center;
    }

    .my-service a {
        width: fit-content;
        margin: auto;
        margin-top: 24px;
        position: relative;
        top: 5%;
        border-radius: 12px;
        color:#333333;
        background:#D5E04D;
    }

    .my-service p {
        /* width: 187px;
        margin-left: auto; */
        width: 220px !important;
        margin-left:auto !important;
        margin-right:auto !important;
        font-size: 12px;
    }
    .ser{
        padding: 30px!important;
        place-items: center;
    }

    .secion-service h1 {
        font-size: 147px;
        font-family: "BlissPro-Heavy";

    }

    img.services1 {
        width: 72%;
    }

    .auto {
        top: auto !important;
        position: unset !important;
        margin-top: auto !important;
    }

    span.baby-green {
        color: #5D786F;
    }

    span.baby-gray {
        color: #333333;
    opacity: 33%;
    }

    .secion-service p.text-gray-500 {
        color: #597B7C;
        font-family: "BlissPro-Heavy"
    }

    .secion-service p.p-auto {
        padding-top: inherit;
    }
    .tow-service{
        margin-bottom: 50px !important;
    }
    .ser{
        justify-self: center;
    }
    a.ser{
        /* width: 131px !important;
    height: 36px !important;
    padding: 9px !important; */
    width: 127px !important;
    height: 35px !important;
    padding: 8px !important;
    
    font-size: 10px;
    }
    .tech{
        height: 75px;
    }
    .price{
        height: 79px;
    }
    div.my-service.p-4.only-services{
column-gap:6px;
    }
</style>
<div class="secion-service">
    <div class="p-8">
        <div class="flex felx-col items-center justify-center">

        </div>
        <h1 class="text-4xl font-medium  text-gray-700 text-center ">
            <span class="baby-green">SER</span><span class="baby-gray">VICES</span>
        </h1>
        <p class="text-center mt-3 text-2xl font-bold text-gray-500 p-auto">
            We Increase Efficiency
        </p>
    </div>

    <div class="flex  grid-cols-4 lg:grid md:grid-cols-4 my-service p-4 only-services">
        <div class="p-8 text-center flex flex-col justify-space-between ser">
            <div class="flex justify-center items-center">
                <img id="" src="{{ asset('/images/HomePage/rcm1.svg') }}" class="services services1" />

            </div>
            <h2 class="uppercase mt-6  font-bold mb-3 ">
                RCM
            </h2>
            <p class="font-bold text-sm text-gray-500 ">
                {{ HomePage::firstOrFail()->fistServiceDescription }}
            </p>


            <a href="#"
                class="ser block w-full rounded bg-white px-12 py-3 text-sm font-bold text-black shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto hover:bg-green-500 text-black">
                Read More
            </a>

        </div>

        <div class="p-8 text-center flex flex-col justify-space-between ser">
            <div class="flex justify-center items-center">
                <img id="" src="{{ asset('/images/HomePage/consul1.svg') }}" class="services services1" />

            </div>
            <h2 class="uppercase mt-6 font-bold mb-3 ">
                CONSULTANCY
            </h2>
            <p class="font-bold text-sm text-gray-500 ">
                {{ HomePage::firstOrFail()->secondServiceDescription }}

            </p>
            <a href="#"
                class="ser block w-full rounded bg-white px-12 py-3 text-sm font-bold text-black shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto hover:bg-green-500 text-black">
                Read More
            </a>
        </div>
        <div class="p-8 text-center flex flex-col justify-space-between ser">
            <div class="flex justify-center  items-center">
                <img id="" src="{{ asset('/images/HomePage/tech1.svg') }}" class="services services1" />

            </div>
            <h2 class="uppercase mt-6  font-bold mb-3 ">
                TECHNOLOGY
            </h2>
            <p class="font-bold  text-gray-500 text-sm tech">
                {{ HomePage::firstOrFail()->thirdServiceDescription }}

            </p>
            <a href="#"
                class="ser block w-full rounded bg-white px-12 py-3 text-sm font-bold text-black shadow  focus:outline-none focus:ring active:bg-rose-500 sm:w-auto hover:bg-green-500 text-black auto">
                Read More
            </a>
        </div>
        <div class="p-8 text-center flex flex-col justify-space-between ser">
            <div class="flex justify-center items-center">
                <img id="" src="{{ asset('/images/HomePage/pric1.svg') }}" class="services services1" />

            </div>
            <h2 class="uppercase mt-6 font-bold mb-3 ">
                PRICING & CONTRACTING
            </h2>
            <p class="font-bold text-sm text-gray-500 price">
                {{ HomePage::firstOrFail()->fourthServiceDescription }}

            </p>
            <a href="#"
                class="ser block w-full rounded bg-white px-12 py-3 text-sm font-bold text-black shadow  focus:outline-none focus:ring active:bg-rose-500 sm:w-auto hover:bg-green-500 text-black auto">
                Read More
            </a>
        </div>
    </div>
</div>
