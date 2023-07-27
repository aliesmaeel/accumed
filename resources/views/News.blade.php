@extends('layouts.master',['header_image'=>'/images/HomePage/newsBanner.png'])    
   

@section('page_banner')
        @include('components.NewsBanner')
@endsection


@section('content')
<style>
body{
    background-color:#F4F4F4;
}

</style>
<div class="careers-job-section news-events-section">
    
          <h1 class="font-light uppercase text-center my-6 mt-8 text-5xl mb-24 careers-job-section"><span class="loc">Late</span>st News & Updates</h1>

          <!-- component -->
<div class="flex items-center justify-center">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 recent-jobs-container">
        <!-- 1 card -->
        <div class="relative flex justify-center flex-col article">
            <div class="flex space-between gap-6">
                <div class="date bg-white flex flex-col  text-black justify-center items-center">
                <div clas="calender flex justify-center"> <p class="flex justify-center text-3xl">31</p></div>
                    <p clas="">march</p>
</div>
                <div class="post-title flex flex-col justify-center font-bold"><p>How Accumed KSA revolutionized
the healthcare industry</p>
<div class="flex gap-6 justify-center py-4 lg:justify-start">
                <div class="flex space-x-2 ">
                   <img src="{{ asset('/images/HomePage/writerName.svg') }}">
                     <p class="time-location text-sm">Zawya</p> 
                </div>
                <div class="flex space-x-2 my-3">
                <img src="{{ asset('/images/HomePage/clockNews.svg') }}">
                   
                     <p class="time-location text-sm">7 minutes </p> 
                </div>
               </div>
</div>
            </div>
        <div class="relative flex justify-center   rounded-3xl w-64 my-4 shadow-xl latest-job ">
            
            
            <img src="{{ asset('/images/HomePage/imgNews.png') }}">
               
                
              

                <div class="border-t-2"></div>
        </div>

        <p class="inline  text-left max-w-xl mb-2 article-content">Lorem ipsum dolor sit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in </p>

        <button class="apply mt-2 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg  
                      focus:outline-none focus:shadow-outline focus:bg-white">
                     Read More 
          </button>
        </div>
        <!-- 2 card -->
        <div class="relative flex justify-center flex-col article">
            <div class="flex space-between gap-6">
                <div class="date bg-white flex flex-col  text-black justify-center items-center">
                <div clas="calender flex justify-center"> <p class="flex justify-center text-3xl">31</p></div>
                    <p clas="">march</p>
</div>
                <div class="post-title flex flex-col justify-center font-bold"><p>How Accumed KSA revolutionized
the healthcare industry</p>
<div class="flex gap-6 justify-center py-4 lg:justify-start">
                <div class="flex space-x-2 ">
                   <img src="{{ asset('/images/HomePage/writerName.svg') }}">
                     <p class="time-location text-sm">Zawya</p> 
                </div>
                <div class="flex space-x-2 my-3">
                <img src="{{ asset('/images/HomePage/clockNews.svg') }}">
                   
                     <p class="time-location text-sm">7 minutes </p> 
                </div>
               </div>
</div>
            </div>
        <div class="relative flex justify-center   rounded-3xl w-64 my-4 shadow-xl latest-job ">
            
            
            <img src="{{ asset('/images/HomePage/imgNews.png') }}">
               
                
              

                <div class="border-t-2"></div>
        </div>

        <p class="inline  text-left max-w-xl mb-2 article-content">Lorem ipsum dolor sit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in </p>

        <button class="apply mt-2 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg  
                      focus:outline-none focus:shadow-outline focus:bg-white">
                     Read More 
          </button>
        </div>

        <!-- 3 card -->
        <div class="relative flex justify-center flex-col article">
            <div class="flex space-between gap-6">
                <div class="date bg-white flex flex-col  text-black justify-center items-center">
                <div clas="calender flex justify-center"> <p class="flex justify-center text-3xl">31</p></div>
                    <p clas="">march</p>
</div>
                <div class="post-title flex flex-col justify-center font-bold"><p>How Accumed KSA revolutionized
the healthcare industry</p>
<div class="flex gap-6 justify-center py-4 lg:justify-start">
                <div class="flex space-x-2 ">
                   <img src="{{ asset('/images/HomePage/writerName.svg') }}">
                     <p class="time-location text-sm">Zawya</p> 
                </div>
                <div class="flex space-x-2 my-3">
                <img src="{{ asset('/images/HomePage/clockNews.svg') }}">
                   
                     <p class="time-location text-sm">7 minutes </p> 
                </div>
               </div>
</div>
            </div>
        <div class="relative flex justify-center   rounded-3xl w-64 my-4 shadow-xl latest-job ">
            
            
            <img src="{{ asset('/images/HomePage/imgNews.png') }}">
               
                
              

                <div class="border-t-2"></div>
        </div>

        <p class="inline  text-left max-w-xl mb-2 article-content">Lorem ipsum dolor sit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in </p>

        <button class="apply mt-2 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg  
                      focus:outline-none focus:shadow-outline focus:bg-white">
                     Read More 
          </button>
        </div>

         <!-- 4 card -->
         <div class="relative flex justify-center flex-col article">
            <div class="flex space-between gap-6">
                <div class="date bg-white flex flex-col  text-black justify-center items-center">
                <div clas="calender flex justify-center"> <p class="flex justify-center text-3xl">31</p></div>
                    <p clas="">march</p>
</div>
                <div class="post-title flex flex-col justify-center font-bold"><p>How Accumed KSA revolutionized
the healthcare industry</p>
<div class="flex gap-6 justify-center py-4 lg:justify-start">
                <div class="flex space-x-2 ">
                   <img src="{{ asset('/images/HomePage/writerName.svg') }}">
                     <p class="time-location text-sm">Zawya</p> 
                </div>
                <div class="flex space-x-2 my-3">
                <img src="{{ asset('/images/HomePage/clockNews.svg') }}">
                   
                     <p class="time-location text-sm">7 minutes </p> 
                </div>
               </div>
</div>
            </div>
        <div class="relative flex justify-center   rounded-3xl w-64 my-4 shadow-xl latest-job ">
            
            
            <img src="{{ asset('/images/HomePage/imgNews.png') }}">
               
                
              

                <div class="border-t-2"></div>
        </div>

        <p class="inline  text-left max-w-xl mb-2 article-content">Lorem ipsum dolor sit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in </p>

        <button class="apply mt-2 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg  
                      focus:outline-none focus:shadow-outline focus:bg-white">
                     Read More 
          </button>
        </div>
        <!-- card 5 -->
        <div class="relative flex justify-center flex-col article">
            <div class="flex space-between gap-6">
                <div class="date bg-white flex flex-col  text-black justify-center items-center">
                <div clas="calender flex justify-center"> <p class="flex justify-center text-3xl">31</p></div>
                    <p clas="">march</p>
</div>
                <div class="post-title flex flex-col justify-center font-bold"><p>How Accumed KSA revolutionized
the healthcare industry</p>
<div class="flex gap-6 justify-center py-4 lg:justify-start">
                <div class="flex space-x-2 ">
                   <img src="{{ asset('/images/HomePage/writerName.svg') }}">
                     <p class="time-location text-sm">Zawya</p> 
                </div>
                <div class="flex space-x-2 my-3">
                <img src="{{ asset('/images/HomePage/clockNews.svg') }}">
                   
                     <p class="time-location text-sm">7 minutes </p> 
                </div>
               </div>
</div>
            </div>
        <div class="relative flex justify-center   rounded-3xl w-64 my-4 shadow-xl latest-job ">
            
            
            <img src="{{ asset('/images/HomePage/imgNews.png') }}">
               
                
              

                <div class="border-t-2"></div>
        </div>

        <p class="inline  text-left max-w-xl mb-2 article-content">Lorem ipsum dolor sit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in </p>

        <button class="apply mt-2 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg  
                      focus:outline-none focus:shadow-outline focus:bg-white">
                     Read More 
          </button>
        </div>
        <!--  -->
        <div class="relative flex justify-center flex-col article">
            <div class="flex space-between gap-6">
                <div class="date bg-white flex flex-col  text-black justify-center items-center">
                <div clas="calender flex justify-center"> <p class="flex justify-center text-3xl">31</p></div>
                    <p clas="">march</p>
</div>
                <div class="post-title flex flex-col justify-center font-bold"><p>How Accumed KSA revolutionized
the healthcare industry</p>
<div class="flex gap-6 justify-center py-4 lg:justify-start">
                <div class="flex space-x-2 ">
                   <img src="{{ asset('/images/HomePage/writerName.svg') }}">
                     <p class="time-location text-sm">Zawya</p> 
                </div>
                <div class="flex space-x-2 my-3">
                <img src="{{ asset('/images/HomePage/clockNews.svg') }}">
                   
                     <p class="time-location text-sm">7 minutes </p> 
                </div>
               </div>
</div>
            </div>
        <div class="relative flex justify-center   rounded-3xl w-64 my-4 shadow-xl latest-job ">
            
            
            <img src="{{ asset('/images/HomePage/imgNews.png') }}">
               
                
              

                <div class="border-t-2"></div>
        </div>

        <p class="inline  text-left max-w-xl mb-2 article-content">Lorem ipsum dolor sit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in </p>

        <button class="apply mt-2 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg  
                      focus:outline-none focus:shadow-outline focus:bg-white">
                     Read More 
          </button>
        </div>
        
</div>

</div>
<button class="view mt-20 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg  
                      focus:outline-none focus:shadow-outline focus:bg-white">
                      VIEW MORE 
          </button>
</div>
</div>

        @include('components.organization')

    </section>
    
@endsection