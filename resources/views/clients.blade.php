@extends('layouts.master', ['header_image' => '/images/HomePage/clients_banner.jpg'])


@section('page_banner')
@include('components.regular-banner',['title'=> '<span>OUR</span> CLIENTS'])
@endsection


@section('content')
<div id="clients_page">

<div class="mx-auto bg-light text-center pb-36 ">
    <div class="container flex justify-content-center px-6 ">
        <p class="py-24 lg:w-1/2 md:w-auto text-center font-medium text-2xl mx-auto">
            We advised and assisted numerous prestigious clients in
            achieving the desired strategic and financial outcomes</p>
    </div>
    <div class="clients bx-6 flex flex-wrap items-center justify-around bg-[url('/images/lines_bg_1.png')] bg-cover	bg-center">

        @foreach($clients as $client)
        <div class="px-6 w-1/6 ">
            <img src="{{ $client->logo ?'/storage/'.$client->logo : ''}}" alt="{{$client->name ?? ''}}">
        </div>
        @endforeach

    </div>
</div>

@include('components.organization')

</div>



@endsection