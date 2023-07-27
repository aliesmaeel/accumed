@extends('layouts.master',['header_image'=>'/images/HomePage/MainBanner13.png'])


@section('page_banner')
        @include('components.contact-us-banner')
@endsection
@section('content')
<style>
/* section.contact1{
    background-color:#F4F4F4 !important;
    background-size:cover;
} */
body{
    background-color:white;
}
.LOCATE-US .text-green{
 color:#597B7C;
 font-family: "Nexa-Bold";
}
label{
    color:#5D786F;
}
.LOCATE-US .details{
    place-content: center;
}
.LOCATE-US img{
    width: 66%;
}
.LOCATE-US .text-gray{
    color:#333333;
}
.map{

    height: -webkit-fill-available;

}
.contactUs button{
    font-weight: 600;
    border-radius: 20px;
    width: 122px;
    text-align: center;
    display: flex;
    justify-content: center;
    background: #CCE72E;
    padding: 7px;
    height: 33px;
        color: #333333;
font-family: "BlissPro-Heavy";


}

input,
input::-webkit-input-placeholder {
  font-size: 10px;
  line-height: 3;
  color:#e5e7eb;
}
textarea{
    height: 307px;
    /* border:#707070 !important; */
    border:1px solid #e5e7eb !important;
}
.background-green{
    background-color:#C8EC48;
}
.contactUs .bg-green {
        background-color: #B7E438;
        /* color: white; */
        position: relative;
        border-radius: 10.3px;

        display: inline-block;
        padding: 0.2em 10px;
    }
    .loc{
        /* background-color: #B7E438; */
        /* color: white; */
        color:#333333;
        position: relative;
        /* border-radius: 10.3px; */

        display: inline-block;
        /* padding: 0.2em 10px; */
        z-index: 10;
    }
    .shadow-xl{
        box-shadow: 10px 5px 5px #707070 !important;
    }
    .loc:before{
        content: " ";
        display: block;
        height: 44%;
        width: 100%;
        margin-left: -3px;
        margin-right: -3px;
        position: absolute;
        background: #CCE72E;
        /* transform: rotate(2deg); */
        top: 25px;
        border-radius: 5px;
        z-index: -1;
    }
    *:focus {
    outline: none;
}
.details p.ltd {
  font-size: 27px;
    padding-left: 1rem;
    font-family: "BlissPro-Heavy";


}
.white_background_color{
    background-color: white;
}

</style>
<section class="contact1">
    <section class="contactUs">

        <h1 class="font-light text-center my-6 mt-8 text-4xl"> <span class="loc">Rea</span>ch Out to Us</h1>
        <div class="flex justify-center  items-center ">

	<div class="container mx-auto my-4 px-4 lg:px-20">

		<div class="w-full p-8 my-4  mx-auto md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto  shadow-xl bg-white">

			<div class="grid grid-cols-1 gap-24 md:grid-cols-2  my-contact">
            <div class="relative h-11 w-full min-w-[200px]">
            <label class="after:content[' '] pointer-events-none absolute  left-0 -top-2.5 flex h-full w-full select-none text-sm font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-pink-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm ">
            First Name
    </label>
    <input
      placeholder="John"
      class="peer h-full w-full border-b mt-3 border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
    />

  </div>
  <div class="relative h-11 w-full min-w-[200px]">
            <label class="after:content[' '] pointer-events-none absolute left-0 -top-2.5 flex h-full w-full select-none text-sm font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-pink-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:after:scale-x-100 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
            Last Name
    </label>
    <input
      placeholder="Doe"
      class="peer h-full w-full border-b mt-3 border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
    />

  </div>
  <div class="relative h-11 w-full min-w-[200px]">
            <label class="after:content[' '] pointer-events-none absolute left-0 -top-2.5 flex h-full w-full select-none text-sm font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-pink-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:after:scale-x-100 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
            Contact Number
    </label>
    <input
      placeholder="Contact Number"
      class="peer h-full w-full border-b mt-3 border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
    />

  </div>
    <div class="relative h-11 w-full min-w-[200px]">
            <label class="after:content[' '] pointer-events-none absolute left-0 -top-2.5 flex h-full w-full select-none text-sm font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-pink-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:after:scale-x-100 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
            Email address
    </label>
    <input
      placeholder="Email address"
      class="peer h-full w-full border-b mt-3 border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
    />

  </div>
        </div>
				<div class="my-8 relative  w-full min-w-[200px]">
                <label class="after:content[' '] pointer-events-none absolute left-0 -top-2.5 flex h-full w-full select-none text-sm font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-pink-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:after:scale-x-100 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                Message
    </label>
					<textarea placeholder="Message*" class="w-full h-32  text-gray-900 mt-10 border-blue-gray-200 bg-transparent p-3  focus:outline-none focus:shadow-none"></textarea>
				</div>
				<div class="my-2 w-1/2 lg:w-1/4">

				</div>
			</div>


    </div>

</div>
<button class="flex mx-auto uppercase text-sm  font-light  text-gray-100 p-3 rounded-lg
                      focus:outline-none focus:shadow-outline focus:bg-white">
            Send
          </button>


          <h1 class="font-light uppercase text-center my-6 mt-8 text-5xl"><span class="loc">LOC</span>ATE US</h1>
<div class="container my-24 mx-auto md:px-6 LOCATE-US">



<div class="container flex justify-center my-24 mx-auto md:px-6">

  <section class="mb-32"style='margin-left: 64px;'>
    <div
      class="block  ">
      <div class="flex flex-wrap items-center on-mobile" style="place-content: space-between;">
        <div class="flex flex-wrap w-full shrink-0 grow-0 basis-auto lg:flex lg:w-6/12 xl:w-4/12  shadow-xl map">
          <div class="h-full w-full"  style='height:400px;'>

              <iframe class="shadow-xl" src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" width="650" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          </div>
        </div>
        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 xl:w-8/12 mob-1" style="width: 52%;">
          <div class="flex flex-wrap  pt-12 pb-12 md:pb-0 lg:pt-0 details">
            <div class="mb-12 w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:w-6/12 xl:px-12 ">
              <p class="flex flex-wrap  pt-12 pb-12 md:pb-0 lg:pt-0 font-bold  text-left my-6 mt-8 text-xl text-gray ltd">
                Accumed Saudi<br>
Company Ltd
              </p>

              <div class="flex items-center mt-4">
                <div class="shrink-0">
                  <div class="white_background_color inline-block rounded-md bg-primary-100 p-4 text-primary">
                <img src="{{ asset('/images/HomePage/whatsupICON.svg') }}">
                  </div>
                </div>
                <div class="">
                  <p class="mb-2 font-light text-green">
                    +966 582 721 171
                  </p>
                </div>
              </div>

              <div class="flex items-center mt-4">
                <div class="shrink-0">
                  <div class="white_background_color inline-block rounded-md bg-primary-100 p-4 text-primary">
                <img src="{{ asset('/images/HomePage/locate-green.svg') }}">
                  </div>
                </div>
                <div class="">
                  <p class="mb-2 font-light text-green">
                  Al Ebdaa Tower، 13th Floor، King Fahd Road - Al Olaya Dist, Riyadh 12313, Saudi Arabia
                  </p>


                </div>
              </div>
              <div class="flex items-center mt-4">
                <div class="shrink-0">
                  <div class=" white_background_color inline-block rounded-md bg-primary-100 p-4 text-primary">
                <img src="{{ asset('/images/HomePage/emai-green.svg') }}">
                  </div>
                </div>
                <div class="">
                  <p class="mb-2 font-light text-green">
                  info@accumed.sa.com
                  </p>


                </div>
              </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
            </div>

            </div>
            </section>


        @include('components.organization')


    </section>
            </div>
@endsection
