<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <link href="{{ asset('css/main.css') }}?v={{ time() }}" rel="stylesheet">

  <!-- Styles -->
  <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <!-- Scripts -->
  <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

  <!-- <script src="https://cdn.tailwindcss.com"></script> -->

</head>

<body style="background-color: #f4f4f4">
  <!-- <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1> -->
  <!--  Header Area -->
  <header class=" ">
    <section class="relative bg-[url('{{ $header_image ?? '/images/HomePage/MainBanner2.png' }}')]  bg-cover bg-center bg-no-repeat org header-nav" style="background-image: url('{{ $header_image ?? '/images/HomePage/MainBanner2.png' }}');">

      @include('layouts.header1')
      @yield('page_banner')

    </section>
  </header>
  <!-- Page Content  -->
  @yield('content')
  <!-- Page component  -->
  @yield('component')
  <!--  Footer Area -->
  @include('layouts.footer1')
  <!-- <script type="text/javascript" src="/node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script> -->
  <!--  Footer Area End  -->

</body>

</html>