@php

use App\Models\HomePage;

@endphp

<style>
    nav {
        padding-top: 42px;
    }

    header {
        display: block;
    }

    .text-white {
        color: white !important;
    }

    .w-auto {
        width: auto;
    }

    .dropdown:hover>.dropdown-content {
        display: block;
    }

    #one ul {
        z-index: 2;
    }

    .org.header-nav {
        background-image: url('https://accumed.aratech.co/images/HomePage/MainBanner2.png') !important;
        height: unset;
        margin: auto;
    }

    .pb-28 {
        padding-bottom: 7rem;
    }

    .dropdown:hover>.dropdown-content {
        display: block;
    }

    .heavy-font {
        font-family: "BlissPro-Heavy";
    }
</style>
<nav class="
          flex items-center
          justify-between
          w-full
          
          md:py-0
         
          text-lg text-gray-700
          px-32 lg:px-6 py-2.5 
        " id="nav">
    <div>
        <a href="/home">
            <img src="{{ asset('/images/HomePage/logoMain.svg') }}" class="header-logo" class="ml-44 h-6 sm:h-9" />

        </a>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer md:hidden block text-white" fill="white" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>

    <div class="hidden  w-auto md:flex md:items-center md:w-auto text-white" id="menu">
        <ul class="
              pt-4
              text-base text-gray-700
              md:flex
              md:justify-between 
              md:pt-0 text-white">

            <div class="dropdown inline-block relative pl-56" id="one">
                <button class="hover:text-green-500 transition-colors font-light py-2 px-4 rounded inline-flex items-center text-white ">
                    <span>Company</span>
                </button>
                <ul class="dropdown-content absolute hidden text-gray-700 pt-1 bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute 
  transition duration-150 ease-in-out origin-top min-w-32 z-">
                    <li><a class="hover:bg-green-500 text-black rounded-t  transition-colors text-black text-left py-2 px-4 block whitespace-no-wrap" href="#">About us</a></li>
                    <li><a class=" hover:bg-green-500 text-black text-left py-2 px-4 block whitespace-no-wrap " href="#">Leadership</a></li>
                    <li><a class=" hover:bg-green-500 text-black text-left py-2 px-4 block whitespace-no-wrap" href="#">Investors</a></li>
                    <li><a class=" hover:bg-green-500 text-black text-left py-2 px-4 block whitespace-no-wrap" href="#">People & Culture</a></li>


                </ul>
            </div>

            <li>
                <a href="#" class="hover:text-green-500 transition-colors font-light block py-2 pr-4 pl-3  text-black lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 lg:dark:hover:text-white lg:dark:hover:bg-transparent hover:text-green-500 transition-colors text-white">Services</a>
            </li>
            <li>
                <a href="#" class="hover:text-green-500 transition-colors font-light block py-2 pr-4 pl-3  text-black lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 lg:dark:hover:text-white lg:dark:hover:bg-transparent hover:text-green-500 transition-colors text-white">Clients
                </a>
            </li>
            <li>
                <a href="#" class="hover:text-green-500 transition-colors font-light block py-2 pr-4 pl-3 text-black  lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 lg:dark:hover:text-white lg:dark:hover:bg-transparent hover:text-green-500 transition-colors text-white">
                    Media Center </a>
            </li>
            <li>
                <a href="/careers" class="hover:text-green-500 transition-colors font-light block py-2 pr-4 pl-3 text-black  lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 lg:dark:hover:text-white lg:dark:hover:bg-transparent hover:text-green-500 transition-colors text-white">Careers</a>
            </li>
            <li>
                <a href="/contact" class="hover:text-green-500 transition-colors font-light block py-2 pr-4 pl-3 hover:text-green-500 transition-colors  lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 lg:dark:hover:text-white lg:dark:hover:bg-transparent hover:text-green-500 transition-colors text-white">
                    Contact Us</a>
            </li>
        </ul>
    </div>
</nav>

<!-- <div class="relative mx-auto px-32 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8 pt-28 pb-28 hero">
            <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">

                <h1 class="text-3xl font-extrabold sm:text-5xl text-white mb-4 text-left"><span
                        class="color-green">Maximize
                    </span>Your Revenue While Optimizing
                    Healthcare Quality
                </h1>
                <p class="text-white text-left">{{ HomePage::firstOrFail()->hero_text }}</p>
                <div class="mt-8 flex gap-4 text-center call-write-button justify-flex-start">
                    <a href="#"
                        class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-black shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto hover:bg-green-500 text-black">
                        Our Services
                    </a>
                    <a href="#"
                        class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-black shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto hover:bg-green-500 text-black">
                        Schedule A Call
                    </a>
                </div>
            </div>
        </div> -->
<!-- </section> -->
<!-- </header> -->
<script>
    
    const button = document.querySelector('#menu-button');
    const menu = document.querySelector('#menu');
    const nav = document.querySelector('#nav');

    const simplemenu = document.querySelector('#simplemenu');


    button.addEventListener('click', () => {
        menu.classList.toggle('hidden');

        nav.classList.toggle('flex-wrap');

        nav.classList.toggle('bg-black');

       
        // simplemenu.classList.toggle('hidden');

    });
    
</script>