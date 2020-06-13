@extends('layouts.app')

@section('title', 'Page Title')


@section('content')
<div class="pt-24   pb-24 bg-white ">

	<div class="container  font-serif text-blue-900 p-12 mx-auto flex flex-wrap flex-col md:flex-row items-center">

			{{-- <p class="uppercase tracking-loose w-full">What business are you?</p> --}}
			<h1 class="my-4 text-4xl font-bold leading-tight px-12">Sign up once and do unlimited shipping</h1>
			<p class="leading-normal text-xl px-12 mb-8">
                As our name suggests, you are sure that your packages/Cargo when delivered to us is handled with care and will be delivered to you
                 in the shortest possible time. With Ship to Sure, you are Sure that your packages are insured. Ship to Sure Couriers and Freight is
                 sure to deliver a high customer service experience to our clients through our qualified staff in Jamaica and the United States of America.
            </p>
			<p class="leading-normal text-xl mb-8 px-12">
                Ship to Sure Ja transports cargos of any size. In the shortest time with full responsibility for safety, we will deliver your packages/Cargos
                wherever you are in Jamaica! Even more, we provide our clients with all the necessary information regarding the stages of cargo transportation
                up until the time it reaches your location.
                <div class="px-12 mt-8">

                    <a href="https://sts.shiptojm.com/Account/Register"  class="mx-auto px-12 lg:mx-0 hover:underline bg-green-400 text-green-100 font-bold rounded-full my-6 py-4 px-8 shadow-2xl hover:bg-blue-400">GET STARTED</a>

                </div>
            </p>
    </div>





 </div>
@stop
