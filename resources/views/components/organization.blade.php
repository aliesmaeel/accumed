<!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->
<style>
    section.org-section {
        margin: 6rem auto;
        height: 423px;
    }

    .org-section {
        background-image: url("https://accumed.aratech.co/images/HomePage/organizationIMG.png");

    }

    .color-green {
        color: #B7E438;
    }

    .call-write-button a {
        width: 185px;
        height: 52px;
        justify-content: center;
    }

    .pt-28 {
        padding-top: 7rem;
    }
    .color-green.font-heavy{
    font-family: "BlissPro-Heavy";
    color:#C4D93D;

    }
</style>
<section
    class="relative bg-[url('https://accumed.aratech.co/images/HomePage/organizationIMG.png')]  bg-cover bg-center bg-no-repeat org org-section mt-7">
    <div
        class="absolute inset-0  sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l">
    </div>

    <div class="relative mx-auto max-w-screen-xl px-16 py-32 sm:px-6 lg:flex  lg:items-center lg:px-8 pt-28">
        <div class="max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
            <h1 class="md:text-3xl font-bold sm:text-5xl color-green">
                Let’s discuss how we can<br>


                optimize your organization’s<br>
                ﬁnancial performance!

            </h1>



            <div class="mt-8 flex gap-4 text-center call-write-button">
                <a href="#"
                    class="block w-full rounded bg-white px-12 py-3  text-sm font-bold text-black shadow focus:outline-none focus:ring sm:w-auto text-black">
                    Schedule a call
                </a>

                <a href="#"
                    class="block w-full rounded bg-white px-12 py-3 text-sm font-bold shadow focus:outline-none focus:ring sm:w-auto text-black">
                    Write to us
                </a>
            </div>
        </div>
    </div>
</section>
