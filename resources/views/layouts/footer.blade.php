<!--Footer-->
<footer class="bg-gray-100 border-lg border-blue-900 shadow-lg">
	<div class="container mx-auto  px-4">






        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/4 flex flex-col mb-4 mt-8 md:mb-0">
                <a class="text-orange-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"  href="/">
                    <img src="{{asset('/image/logo.png')}}"  width="200" height="300" transform="matrix(1,0,0,1,0,0)"  alt="" srcset="">
				</a>
            </div>


            <div class="md:w-1/4 flex flex-col mt-8 mb-12 md:mb-0 uppercase">
                <a href=" {{url('pages/privacy')}}" class="text-sm text-gray-800 py-1">Privacy Policy</a>
                {{-- <a href="#" class="text-sm text-gray-800 py-1">Terms & Conditions</a> --}}
            </div>



            <div class="md:w-1/4 flex flex-col mt-8 mb-12 md:mb-0">
                <ul class="list-reset uppercase">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="{{url('pages/rates')}}" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Rates</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="{{url('pages/about')}}" class="no-underline hover:underline text-gray-800 hover:text-orange-500">About Us</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="{{url('pages/contact')}}" class="no-underline hover:underline text-gray-800 hover:text-orange-500">Contact</a>
                    </li>
                </ul>
            </div>


            <div class="md:w-1/4 flex flex-row mt-8 mb-12 md:mb-0">
                <span class="mt-2   mr-4 md:block  ">
                    <a href="https://facebook.com/shiptosureja"class="no-underline hover:underline text-gray-800 hover:text-orange-500">  <img src="{{asset('/image/facebook.png')}}"  width="38px"></a>
                </span>
                <span class="mt-2  ml-8  mr-4 md:block  ">
                    <a href="https://instagram.com/shiptosureja" class="no-underline hover:underline text-gray-800 hover:text-orange-500"> <img src="{{asset('/image/instagram.png')}}" width="38px"></a>
                </span>
                <span class="mt-2 ml-8   mr-4 md:block  ">
                    <a href="https://twitter.com/shiptosureja" class="no-underline hover:underline text-gray-800 hover:text-orange-500"><img src="{{asset('/image/twitter.png')}}"   width="38px"></a>
                </span>
            </div>
        </div>

        <div class="flex justify-between items-end pt-12">
            <div class="w-full md:w-1/2">
                <div>
                    <p class="text-sm text-blue-900">Copyright ©2020 shiptosureja.com </p>
                </div>
            </div>
        </div>


    </div>

</footer>
