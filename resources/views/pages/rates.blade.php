@extends('layouts.app')

@section('title', 'Page Title')


@section('content')
<div class="pt-24 bg-white ">

	<div class="container bg-white px-2 mx-auto flex flex-wrap flex-col md:flex-row items-center">
		<!--Left Col-->
		<div class="flex flex-col w-full md:w-2/5 mr-12 font-serif justify-center items-start text-center md:text-left">
			{{-- <p class="uppercase tracking-loose w-full">What business are you?</p> --}}
			<h1 class="-mt-16 text-5xl font-bold leading-tight text-blue-700">Sign up once and do unlimited shipping</h1>
            <p class="leading-normal mt-2 text-2xl mb-8 text-blue-600">Ship to Sure Ja will do the rest!</p>






            <div class="flex flex-wrap overflow-hidden shadow-4xl border-b rounded-md">

                <div class="w-full overflow-hidden opacity-100">
                    <img src="{{asset('/image/offer.jpeg')}}"  >

                </div>

              </div> 
			<a href="https://sts.shiptojm.com/Account/Register" class="mx-auto lg:mx-0 hover:underline bg-green-500 text-green-100 font-bold rounded-full my-6 py-4 px-8 shadow-2xl hover:bg-blue-400">GET STARTED</a>
		</div>



        <div class="text-gray-900 bg-blue-200 rounded-t-full mt-2 shadow-2xl">
            <div class="p-4 flex  justify-center items-center  ">
                <h1 class="text-3xl text-blue-700 ">
                    RATE SHEET
                </h1>
            </div>

                <table class="w-full text-lg bg-blue-200 text-blue-700 shadow-md  border-b border-9  rounded-lg   shadow-2xl ">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left p-2 px-5">WEIGHT (1BS)</th>
                            <th class="text-left p-2 px-5">RATE (JMD)</th>
                            <th class="text-left p-2 px-5">WEIGHT (1BS)</th>
                            <th class="text-left p-2 px-5">RATE (JMD)</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr class="border-b hover:bg-green-400  hover:text-green-100 text-2xl bg-gray-400">
                            <td class="p-2 px-5">0.5</td>
                            <td class="p-2 px-5">$350</td>
                            <td class="p-2 px-5">11</td>
                            <td class="p-2 px-5">$3700</td>

                        </tr>
                        <tr class="border-b hover:bg-green-400  hover:text-green-100 text-2xl  bg-gray-100">
                            <td class="p-2 px-5">1</td>
                            <td class="p-2 px-5">$550</td>
                            <td class="p-2 px-5">12</td>
                            <td class="p-2 px-5">$4000</td>
                        </tr>
                        <tr class="border-b hover:bg-green-400  hover:text-green-100 text-2xl  bg-gray-400">

                            <td class="p-2 px-5">2</td>
                            <td class="p-2 px-5">$850</td>

                            <td class="p-2 px-5">13</td>
                            <td class="p-2 px-5">$4300</td>
                        </tr>
                        <tr class="border-b hover:bg-green-400  hover:text-green-100 text-2xl  bg-gray-100">
                            <td class="p-2 px-5">2</td>
                            <td class="p-2 px-5">$1150</td>
                            <td class="p-2 px-5">14</td>
                            <td class="p-2 px-5">$4600</td>
                        </tr>
                        <tr class="border-b hover:bg-green-400  hover:text-green-100 text-2xl  bg-gray-400">
                            <td class="p-2 px-5">4</td>
                            <td class="p-2 px-5">$1500</td>
                            <td class="p-2 px-5">15</td>
                            <td class="p-2 px-5">$4900</td>
                        </tr>
                        <tr class="border-b hover:bg-green-400  hover:text-green-100 text-2xl  bg-gray-100">

                            <td class="p-2 px-5">5</td>
                            <td class="p-2 px-5">$1900</td>
                            <td class="p-2 px-5">16</td>
                            <td class="p-2 px-5">$5200</td>



                        </tr>
                        <tr class="border-b hover:bg-green-400  hover:text-green-100 text-2xl  bg-gray-400">

                            <td class="p-2 px-5">6</td>
                            <td class="p-2 px-5">$2200</td>
                            <td class="p-2 px-5">17</td>
                            <td class="p-2 px-5">$5500</td>
                        </tr>
                        <tr class="border-b hover:bg-green-400  hover:text-green-100 text-2xl  bg-gray-100">
                            <td class="p-2 px-5">7</td>
                            <td class="p-2 px-5">$2500</td>
                            <td class="p-2 px-5">18</td>
                            <td class="p-2 px-5">$5800</td>
                         </tr>
                         <tr class="border-b hover:bg-green-400  hover:text-green-100 text-2xl  bg-gray-400">
                            <td class="p-2 px-5">8</td>
                            <td class="p-2 px-5">$2800</td>
                            <td class="p-2 px-5">19</td>
                            <td class="p-2 px-5">$6100</td>
                         </tr>
                         <tr class="border-b hover:bg-green-400  hover:text-green-100 text-2xl  bg-gray-100">
                            <td class="p-2 px-5">9</td>
                            <td class="p-2 px-5">$3100</td>
                            <td class="p-2 px-5">20</td>
                            <td class="p-2 px-5">$6400</td>
                         </tr>
                         <tr class="border-b hover:bg-green-400  hover:text-green-100 text-2xl  bg-gray-400">

                            <td class="p-2 px-5">10</td>
                            <td class="p-2 px-5">$3400</td>
                            <td class="p-2 px-5">21</td>
                            <td class="p-2 px-5">$6700</td>
                         </tr>

                    </tbody>
                </table>

        </div>



	</div>


	<div class="container px-2 mx-auto flex flex-wrap flex-col md:flex-row items-center  shadow-lg rounded mt-12">
            <div class="flex flex-col w-full md:w-2/5 mr-12 font-mono justify-center items-start text-center md:text-left">

                        <article class="mb-12">
                            <p class="mb-4 text-blue-900 text-lg md:text-lg no-underline">
                                <span class="text-red-400">  NB:</span> For every one(1) 1b after 15 lbs, add $250 JMD up to 50 lbs. For items weighing more than 50 lbs please send us an email for a reasonable quotation.
                                <span class="text-red-400">   (Prices are Subject to Change)</span>
                            </p>




                        </article>
            </div>

            <div class="flex flex-col w-full md:w-2/5 mr-12 font-mono justify-center items-start text-center md:text-left  mt-2">

                <article class="mb-12">
                    <p c class="mb-4 text-blue-900 text-lg md:text-lg no-underline">
                        The Rates Quoted above are for items that Value less than USD$50.00 which does not attract Customs duty. Items over $50.00 USD may attract other charges.
                    </p>

                </article>
    </div>




</div>



















</div>





@stop
