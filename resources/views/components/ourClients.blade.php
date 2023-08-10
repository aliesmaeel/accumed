<?php
use App\Models\HomePage;
?>
<style>
    .secion-service {
        background-color: #F4F4F4;
    }

    img.services {
        width: 50%;
        margin: auto;
    }

    .my-service h2,
    .my-service p {
        color: #333333;
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
    }

    .my-service p {
        width: 187px;
        margin-left: auto;
    }

    .secion-service h1 {
        font-size: 147px;
        font-family: "BlissPro-Heavy";

    }

    .auto {
        top: auto !important;
        position: unset !important;
        margin-top: auto !important;
    }

    span.baby-green {
        color: #587c7f;
    }

    span.baby-gray.client {
        color: #333333;
    }

    .secion-service p.text-gray-500 {
        color: #587c7f;

    }

    .secion-service p.p-auto {
        padding-top: inherit;
    }

    .ourClients {
        background-image: url("https://accumed.aratech.co/images/HomePage/bgOurClients.png");
        background-repeat: no-repeat;
    background-size: cover;
    }
    .section-service.ourClients{
        padding-top: 48px;
    padding-bottom: 26px;
    }
    .speak-themselves{
        font-size:26px;
        color: #587c7f;
        font-family: "Bliss Pro";
    }
</style>
<div class="secion-service ourClients px-3">
    <div class="p-8">
        <div class="flex felx-col items-center justify-center">

        </div>
        <h1 class="text-4xl font-medium  text-gray-700 text-center mt-1">
            <span class="baby-green">OUR </span><span class="baby-gray client">CLIENTS</span>
        </h1>
        <p class="text-center mt-6 text-2xl font-bold  p-auto speak-themselves">
            Our clients & results speak for themselves
        </p>
    </div>
    <diV class="mySwiper overflow-x-hidden relative">
        <div class="p-4 swiper-wrapper">

            @foreach($clients as $client)
            <div class="p-8 text-center swiper-slide">
                <div class="flex justify-center items-center">
                    <img src="{{ $client->logo ?'/storage/'.$client->logo : ''}}" alt="{{$client->name ?? ''}}" class="services">
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 0,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>
