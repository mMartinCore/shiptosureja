<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
		.gradient {
			/* background: linear-gradient(90deg, #53c407 0%, #fbd600 100%); */
            background: linear-gradient(90deg, #1c416b 0%,rgb(97, 206, 240));
		}
	</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> <!--Replace with your tailwind.css once created-->
<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>

</head>

<body class="bg-gray-900 font-sans text-gray-900 leading-normal tracking-normal mt-12">

    <!--Nav-->
    <nav class="bg-blue-700 text-white pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

        <div class="flex flex-wrap items-center">
            <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                <a href="#">
                    <span class="text-xl pl-2"><i class="em em-grinning"></i> <span>    <title>{{ config('app.name', 'Laravel') }}</title></span></span>
                </a>
            </div>


			<div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
				<ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
				    <li class="flex-1 md:flex-none md:mr-3">
					    <a class="inline-block py-2 px-4 text-white no-underline" href="/">Home</a>
				    </li>

                    @if(Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="no-underline mr-4  text-sm font-normal text-white  ">{{ __('My Dashboard') }}</a>
                        <li class="flex-1 md:flex-none md:mr-3">
                            <div class="relative inline-block">
                                <button onclick="toggleDD('myDropdown')" class="drop-button text-white focus:outline-none"> <span class="pr-2"><i class="em em-robot_face"></i></span> Hi, {{ Auth::user()->first_name }} <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg></button>
                                <div id="myDropdown" class="dropdownlist absolute bg-gray-900 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                                    <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-user fa-fw"></i> Profile</a>
                                    <div class="border border-gray-800"></div>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                                        class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block">
                                        <i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                            {{ csrf_field() }}
                                        </form>

                                </div>
                            </div>
                        </li>

                    @else
                    <button id="navAction" class="mx-auto lg:mx-0  text-white font-bold rounded-full mt-2 lg:mt-0 py-2 px-8  ">
                        <a href="{{ route('login') }}"  >{{ __('Login') }}</a> </button>

                        @if (Route::has('register'))
                        <button id="navActionRegister" class="mx-auto lg:mx-0  text-white font-bold rounded-full mt-2 lg:mt-0 py-2 px-8 ">
                             <a href="{{ route('register') }}"  >{{ __('Register') }}</a>
                        </button>

                        @endif
                    @endauth
            @endif












                </ul>
            </div>
        </div>

    </nav>


    <div class="flex  flex-col md:flex-row">

        <div class="bg-gray-900 shadow-lg h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">
           <!-- overflow div -->

            @include('layouts.sidebar')

        </div>

        <div class="main-content flex-1 bg-white  mt-12 md:mt-2 pb-24 md:pb-5">

            <div class="bg-white p-2 shadow text-xl text-white">
                  @yield('topic')
                {{-- <h3 class="font-bold pl-2">Dashboard</h3> --}}
            </div>

            <div class="container bg-white flex justify-center">
                @yield('content')

             </div>

        </div>
    </div>

    </div>






    <script>
        /*Toggle dropdown list*/
        function toggleDD(myDropMenu) {
            document.getElementById(myDropMenu).classList.toggle("invisible");
        }
        /*Filter dropdown options*/
        function filterDD(myDropMenu, myDropMenuSearch) {
            var input, filter, ul, li, a, i;
            input = document.getElementById(myDropMenuSearch);
            filter = input.value.toUpperCase();
            div = document.getElementById(myDropMenu);
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
                var dropdowns = document.getElementsByClassName("dropdownlist");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('invisible')) {
                        openDropdown.classList.add('invisible');
                    }
                }
            }
        }
    </script>


</body>

</html>
