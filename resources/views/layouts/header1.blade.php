<!-- component -->
<style>
@media(min-width: 768px) {
    .md\:contents {
        display:contents !important;
    }

}
.justify-around {
    justify-content: space-around;
}
</style>
<!-- This is an example component -->
<div class=" mx-auto">
    
    <nav class="">
    <div class="container mx-auto flex flex-wrap items-center justify-around" style="">
        <a href="#" class="flex">
        <img src="{{ asset('/images/HomePage/logoMain.svg') }}" class="header-logo" class="ml-44 h-6 sm:h-9" />
        
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="md:hidden ml-3 text-white hover:text-gray-900 focus:outline-none   inline-flex items-center justify-center" aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden md:contents w-full md:w-auto" id="mobile-menu" style="">
        <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
           
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-white  focus:outline-none pl-3 pr-4 py-2  md:p-0 font-medium flex items-center justify-between w-full md:w-auto">Company <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y  rounded shadow my-4 w-44">
                    <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li><a class=" hover:bg-green-500 text-black rounded-t  transition-colors text-black text-left py-2 px-4 block whitespace-no-wrap" href="#">About us</a></li>
                    <li><a class="  hover:bg-green-500 text-black text-left py-2 px-4 block whitespace-no-wrap " href="#">Leadership</a></li>
                    <li><a class="hover:bg-green-500  text-black text-left py-2 px-4 block whitespace-no-wrap" href="#">Investors</a></li>
                    <li><a class=" hover:bg-green-500 text-black text-left py-2 px-4 block whitespace-no-wrap" href="#">People & Culture</a></li>

                    </ul>
                    
                </div>
            </li>
            <li>
            <a href="/services" class="text-white  border-gray-100 md:  block pl-3 pr-4 py-2  md:p-0">Services</a>
            </li>
            <li>
            <a href="/clients" class="text-white  border-gray-100 md:  block pl-3 pr-4 py-2  md:p-0">Clients</a>
            </li>
            <li>
            <a href="#" class="text-white   border-gray-100   block pl-3 pr-4 py-2  md:p-0"> Media Center</a>
            </li>
            <li>
            <a href="/careers" class="text-white  border-gray-100 md:  block pl-3 pr-4 py-2  md:p-0">Careers</a>
            </li>
            <li>
            <a href="/contact" class="text-white block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none" aria-current="page"> Contact Us</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

   
</div>

<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>