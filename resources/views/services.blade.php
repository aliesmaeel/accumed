@extends('layouts.master', ['header_image' => '/images/HomePage/services_banner.png'])


@section('page_banner')

<div class="relative mx-auto px-32 py-32 sm:px-6 lg:flex lg:h-screen lg:px-8 pt-28 pb-28 hero contact1">
    <div class="max-w-4xl text-left lg:pl-40 md:pl-6">

        <h1 class="lg:text-8xl sm:text-5xl md:text-6xl font-bold color-green mb-5 heavy-font uppercase">

            Why <span class="text-blue">RCM</span> for healthcare?
        </h1>
        <p class="text-white text-lg heavy-font leading-5 ">Financial stability and viability of healthcare organizations. Effective revenue cycle management optimizes the billing and reimbursement processes, maximizing the collection of revenue for services rendered. This, in turn, enables healthcare providers to meet their operational costs, invest in cutting-edge technologies, and deliver high-quality patient care.

        </p>

    </div>
</div>
@endsection




@section('content')
<section class=" bg-light m-auto">

    <!-- first section  -->
    <div class="bg-[url('/images/lines_bg_1.png')] bg-cover px-16">

        <div class="container">

        </div>
        <div class="flex pt-3 mt-4 lg:min-h-[534px] lg:py-0 md:py-4">
            <div class="w-5/12 benifits text-center">
                <img src="/images/plant.png">
                <p class="text-7xl leading-9 uppercase heavy-font text-a-grey text-center">
                    <span class="loc">Ben</span>ifits
                </p>
            </div>
            <div class="w-7/12 flex items-center px-5">
                <p class="heavy-font text-a-grey text-left leading-5">
                    Addressing RCM challenges requires a combination of technology solutions, process improvements, staff training, and effective collaboration between healthcare providers, payers, and regulatory bodies.
                    <br>
                    <br>
                    We support you, as a healthcare facility, in enhancing your financial performance through change management, business process improvement and innovative technology. We are your partner in the preventing fraud and abuse within
                    the system and in ensuring that regulatory compliance requirements are met.

                </p>
            </div>
        </div>

    </div>

    <!-- second section -->

    <div class="flex py-20 px-16">
        <div class="md:w-1/2 sm:w-full lg:px-16 md:px-4 sm:px-0">
            @foreach($focus_on_elements as $focus_on)

            <!-- <div>

                <div class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" type="button" data-te-collapse-init data-te-ripple-init data-te-ripple-color="light" data-te-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    test
                </div>
                <div class="!visible hidden" id="collapseExample" data-te-collapse-item>
                    some content
                </div>
            </div> -->

            <div class="mb-3">
                <div class="w-full bg-a-grey text-green px-3 py-2 rounded-lg heavy-font text-lg" data-te-collapse-init data-te-ripple-init data-te-ripple-color="light" data-te-target="#collapse_{{ $loop->index }}" aria-expanded="false" aria-controls="collapse_{{ $loop->index }}">
                    {{ $focus_on['title'] ?? '' }}
                </div>
                <div class="w-full !visible hidden px-3 py-4 heavy-font text-md bg-a-darker-grey" id="collapse_{{ $loop->index }}" data-te-collapse-item>
                    {!! $focus_on['description'] ?? '' !!}
                </div>
            </div>

            @endforeach
        </div>

        <div class="md:w-1/2 sm:w-full items-center relative lg:pl-16 md:px-4 sm:px-0">
            <p class="text-9xl text-a-grey uppercase heavy-font"> We <span class="bg-[url('/images/target.png')] bg-no-repeat bg-contain bg-left-center focus leading-tight">focus</span> on </p>
            <!-- <img src="/images/coffee.png" class="coffee"> -->
        </div>

    </div>



    <!-- third section -->

    <div class="bg-[url('/images/lines_bg_1.png')] bg-cover px-16">
        <h1 class="heavy-font text-5xl text-center mb-8">Our <span class="loc">Services</span> Cover</h1>

        <div class=" py-8 px-32">

            <div class="flex gap-3 items-center justify-center">
                <div class="service-cover w-1/5">
                    <div class="flex flex-col justify-center service-cover-block flex border-2 rounded-full items-center text-center p-6">

                        <div class="p-3 rounded-full">
                            <img src="/images/icon1.svg">
                        </div>

                    </div>
                    <p class="heavy-font text-sm" > FULL RCM SOLUTION</p>

                </div>

                <div class="line-block"><hr class="line"></div>
                

                <div class=" service-cover w-1/6">
                    <div class="flex flex-col justify-center service-cover-block flex border-2 rounded-full items-center text-center p-6">

                        <div class="p-3 rounded-full ">
                            <img src="/images/icon2.svg">
                        </div>

                    </div>
                    <p class="heavy-font text-sm" >RCM & PRIVATIZATION CONSULTANCY SERVICES</p>

                </div>
                <div class="line-block"><hr class="line"></div>


                <div class="service-cover w-1/6">
                    <div class="flex flex-col justify-center service-cover-block flex border-2 rounded-full items-center text-center p-6">

                        <div class="p-3 rounded-full">
                            <img src="/images/icon3.svg">
                        </div>

                    </div>
                    <p class="heavy-font text-sm">SMES CUSTOMIZED RCM SOLUTION</p>

                </div>
                <div class="line-block"><hr class="line"></div>


                <div class="service-cover w-1/6">
                    <div class="flex flex-col justify-center service-cover-block flex border-2 rounded-full items-center text-center p-6">

                        <div class="p-3 rounded-full">
                            <img src="/images/icon4.svg">
                        </div>

                    </div>
                    <p class="heavy-font text-sm" >REVENUE GROWTH ANALYTICS</p>

                </div>
            </div>

        </div>


    </div>


    <!-- last section  -->

    <div class="py-32 px-16 text-center last-sec bg-[url('')]">
        <h1 class="heavy-font text-4xl text-center mb-8">WE PRIORITIZE YOUR NEEDS</h1>
        <p class="heavy-font text-sm text-center lg:px-16">At ACCUMED we take care of complicated insurance and patient billing processes by 
providing the latest solutions to manage your revenue efficiently in a timely manner.</p>
    </div>


</section>

@include('components.organization')

@endsection