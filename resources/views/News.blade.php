@extends('layouts.master',['header_image'=>'/images/HomePage/newsBanner.png'])    
   

@section('page_banner')
        @include('components.NewsBanner')
@endsection


@section('content')
<style>
body{
    background-color:#F4F4F4;
}
.date {
    width: fit-content;
    height: fit-content;
}
.post-title > p {
    font-size: 31px;
}
.time-location {
    padding-left: 0px;
}
.loc::before{
    top: 11px;
    height: 55%;
}
.start::before{
    top: 19px;
    width: 85%;
}

.shadow-xl {
   box-shadow: 4px 5px 12px #707070 !important
}
.contact1 .bg-green {
    padding-right: 5px;
}
</style>
<div class="container mx-auto px-4">
<div class="careers-job-section news-events-section">
          <h1 class="font-light  text-center my-6 mt-8 text-5xl mb-24 careers-job-section"><span class="loc start">Late</span>st News & Updates</h1>
          <!-- component -->
<div class="flex items-center justify-center">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 recent-jobs-container w-full px-8">
        <!-- 1 card -->
        @foreach($AllNews->take(2) as $news)
            <div class="relative flex justify-center flex-col ">
                <div class="flex space-between gap-6">
                    <div class=" date bg-white flex flex-col  text-black justify-center items-center">
                        <div clas="calender flex justify-center" style="width: 100%">
                            <p class="flex justify-center text-4xl px-3">{{$news->created_at->day}}</p></div>
                        <p class="text-3xl">{{substr($news->created_at->format('F'),0,3)}}</p>
                    </div>
                    <div class="post-title flex flex-col justify-center font-bold">
                        <p>
                            <?php
                            $title = explode(' ', trim($news->title))[0] .' '. explode(' ',trim($news->title))[1];
                            ?>
                            <span class="loc">{{$title}} </span> {{substr(strstr($news->title," "), 2)}}
                        </p>

                        <div class="flex items-center gap-6 justify-center py-4 lg:justify-start">
                            <div class="flex space-x-2 ">
                                <img src="{{ asset('/images/HomePage/writerName.svg') }}">
                                <p class="time-location text-sm">{{$news->author}}</p>
                            </div>
                            <div class="flex space-x-2 my-3">
                                <img src="{{ asset('/images/HomePage/clockNews.svg') }}">

                                <p class="time-location text-sm">{{ $news->created_at->diffForHumans(\Illuminate\Support\Carbon::now())}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative flex justify-center max-w-[90%]  my-4 shadow-xl">
                    <img src="{{ asset('/images/HomePage/imgNews.png') }}">
                    <div class="border-t-2"></div>
                </div>
                <p class="inline max-w-[90%] text-left  mb-2 article-content text-[0.78rem]">{{$news->description}}</p>
               <a href="{{$news->read_more}}" >
                   <button class="apply mt-2 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg
                      focus:outline-none focus:shadow-outline focus:bg-white">
                    Read More
                </button>
               </a>
            </div>
        @endforeach

</div>
</div>
    @if($AllNews ->count() > 2)
<button class="view mt-20 flex mx-auto  text-sm  font-light  text-gray-100 p-3 rounded-lg
                      focus:outline-none focus:shadow-outline focus:bg-white">
                      VIEW MORE
</button>
    @endif
</div>
</div>

        @include('components.organization')

    </section>
    
@endsection