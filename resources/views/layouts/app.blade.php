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
			background:lightblue;
            /* background: linear-gradient(90deg, #53c407 0%, #fbd600 100%); */
            /* background: linear-gradient(90deg, #1c416b 0%,rgb(97, 206, 240)); */
		}
	</style>
</head>
{{-- <body class="bg-gray-100 h-screen antialiased leading-none"> --}}
<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <div id="app">
        @include('layouts.nav')

        @yield('content')
        @include('layouts.footer')
        @include('layouts.js')
    </div>
</body>
</html>
