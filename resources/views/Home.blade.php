@extends('layouts.master',['header_image'=>'/images/HomePage/MainBanner2.png'])    
   

@section('page_banner')
        @include('components.homepage-banner')
@endsection

@section('content')
    <section>
        <div class="container mx-auto" >
        @include('components.service')
        @include('components.ourShows')
        @include('components.TESTIMONIALS')
        @include('components.ourClients')
        @include('components.organization')
        </div>
    </section>
@endsection
