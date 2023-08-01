<?php

use App\Models\HomePage;
?>
<style>
    .secion-service.TESTIMONIALS {
        background-color: #F4F4F4;

    }

    img.services {
        /* width: 50%;
        margin: auto; */
    }
    img.services.authorMassege {
    width: 80% !important;
}
.my-service.swiper.mySwiperTest{
    /* display: flex;
    margin: auto 114px; */
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
        /* font-size: 147px; */
        font-family: "BlissPro-Heavy";

    }

    .auto {
        top: auto !important;
        position: unset !important;
        margin-top: auto !important;
    }

    span.baby-green {
        color: #597B7C;
    }

    span.baby-gray {
        color: #707070;
    }

    .secion-service p.text-gray-500 {
        color: #5D786F;

    }

    .secion-service p.p-auto {
        padding-top: inherit;
    }

    .message {
        position: absolute;
        font-size: 9px;
    }

    .message1 {
        color: #4C655C !important;
    position: relative !important;
    font-size: 24px !important;
    font-weight: bolder;
    margin-bottom: 11px;
    /* padding-bottom: 23px; */

        
    }

    .message2 {
        position: initial !important;
        font-size: 11px;
    font-weight: 700;
    /* padding-top: 9px; */
    color: #4C655C !important;
    }

    div#authAndName {
        align-items: center;
        /* width: 50%; */
        width: 73%;
        margin: auto;
        margin-top: 13px;
    }

    div#authAndName img {
        width: 60px;
    }
    .TESTIMONIALS h1.TESTIMONIALS {
    font-size: 116px;
    }
    .TESTIMONIALS {
    background-color: #F4F4F4;
    padding-top: 18px !important;
    /* padding-bottom: 33px !important; */
}
.Proven{
    font-size: 20px !important;
}
</style>
<div class="secion-service TESTIMONIALS">
    <div class="">
        <div class="flex felx-col items-center justify-center">

        </div>
        <h1 class="text-5xl font-medium lg:text-2xl text-gray-700 text-center TESTIMONIALS">
            <span class="baby-green">TESTIMO</span><span class="baby-gray">NIALS</span>
        </h1>
        <p class="text-center mt-6  text-3xl font-bold text-gray-500 Proven">
            Our Proven Track Record

        </p>
    </div>

    <div class="flex  grid-cols-1 md:grid-cols-3 my-service  swiper mySwiperTest">
        <div class="swiper-wrapper">
            <div class="p-8 text-center swiper-slide">
                <div class="flex justify-center items-center">
                    <img id="" src="{{ asset('/images/HomePage/authorMassege.jpeg') }}" class="services authorMassege" />
                    <div class="grid absolute message">
                        <p class="absolute text-center message1">“ Great Service ”</p>
                        <p class="absolute text-center message2">Lorem ipsum
                            dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt</p>
                    </div>
                </div>

                <div id="authAndName" class="flex"><img src="{{ asset('/images/HomePage/authorIMG.svg') }}">
                <div>
                     <p class="font-bold">John Smith</p>
                    <p> Hr Manager</p>
                   </div>
                </div>
            </div>

            <div class="p-8 text-center swiper-slide">
                <div class="flex justify-center items-center">
                    <img id="" src="{{ asset('/images/HomePage/authorMassege.jpeg') }}" class="services authorMassege" />
                    <div class="grid absolute message">
                        <p class="absolute text-center message1">“ Great Service ”</p>
                        <p class="absolute text-center message2">Lorem ipsum
                            dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt</p>
                    </div>
                </div>
                <div id="authAndName" class="flex"><img src="{{ asset('/images/HomePage/authorIMG.svg') }}">
                <div>
                     <p class="font-bold">John Smith</p>
                    <p> Hr Manager</p>
                   </div>
                </div>
            </div>
            <div class="p-8 text-center swiper-slide">
                <div class="flex justify-center items-center">
                    <img id="" src="{{ asset('/images/HomePage/authorMassege.jpeg') }}" class="services authorMassege" />
                    <div class="grid absolute message">
                        <p class="absolute text-center message1">“ Great Service ”</p>
                        <p class="absolute text-center message2">Lorem ipsum
                            dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt</p>
                    </div>
                </div>
                <div id="authAndName" class="flex"><img src="{{ asset('/images/HomePage/authorIMG.svg') }}">
                <div>
                     <p class="font-bold">John Smith</p>
                    <p> Hr Manager</p>
                   </div>
                </div>
            </div>
            <div class="p-8 text-center swiper-slide">
                <div class="flex justify-center items-center">
                    <img id="" src="{{ asset('/images/HomePage/authorMassege.jpeg') }}" class="services authorMassege" />
                    <div class="grid absolute message">
                        <p class="absolute text-center message1">“ Great Service ”</p>
                        <p class="absolute text-center message2">Lorem ipsum
                            dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt</p>
                    </div>
                </div>

                <div id="authAndName" class="flex"><img src="{{ asset('/images/HomePage/authorIMG.svg') }}">
                <div>
                     <p class="font-bold">John Smith</p>
                    <p> Hr Manager</p>
                   </div>
                </div>
            </div>

            <div class="p-8 text-center swiper-slide">
                <div class="flex justify-center items-center">
                    <img id="" src="{{ asset('/images/HomePage/authorMassege.jpeg') }}" class="services authorMassege" />
                    <div class="grid absolute message">
                        <p class="absolute text-center message1">“ Great Service ”</p>
                        <p class="absolute text-center message2">Lorem ipsum
                            dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt</p>
                    </div>
                </div>
                <div id="authAndName" class="flex"><img src="{{ asset('/images/HomePage/authorIMG.svg') }}">
                <div>
                     <p class="font-bold">John Smith</p>
                    <p> Hr Manager</p>
                   </div>
                </div>
            </div>
            <div class="p-8 text-center swiper-slide">
                <div class="flex justify-center items-center">
                    <img id="" src="{{ asset('/images/HomePage/authorMassege.jpeg') }}" class="services authorMassege" />
                    <div class="grid absolute message">
                        <p class="absolute text-center message1">“ Great Service ”</p>
                        <p class="absolute text-center message2">Lorem ipsum
                            dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt</p>
                    </div>
                </div>
                <div id="authAndName" class="flex"><img src="{{ asset('/images/HomePage/authorIMG.svg') }}">
                   <div>
                     <p class="font-bold">John Smith</p>
                    <p> Hr Manager</p>
                   </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>
</div>
<script>
    // var swiper = new Swiper(".mySwiperTest", {
    //     slidesPerView: 3,
    //     spaceBetween: 0,
    //     navigation: {
    //         nextEl: ".swiper-button-next",
    //         prevEl: ".swiper-button-prev",
    //     },
    // });


    // if (window.matchMedia("(min-width: 500px)").matches) {
    var swiper = new Swiper(".mySwiperTest", {
        slidesPerView: 1,
        spaceBetween: 0,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },

            760: {
                slidesPerView: 3,
                spaceBetween: 20
            },

            // when window width is >= 480px
            480: {
                slidesPerView: 2,
                spaceBetween: 20
            },
        },

        loop: true



    });
    //   } 
</script>