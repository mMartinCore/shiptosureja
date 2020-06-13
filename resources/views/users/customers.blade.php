@extends('layouts.backend')

@section('title', '| Users')

@section('topic')


                <div class="p-2">
                    <div class="flex justify-start items-baseline flex-wrap">
                        <div class="flex m-2">
                            <a href="{{ route('roles.index') }}" class="text-base  rounded-r-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
                        hover:bg-teal-700 hover:text-teal-100
                        bg-teal-100
                        text-teal-700
                        border duration-200 ease-in-out
                        border-teal-600 transition">
                                <div class="flex leading-5">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save w-5 h-5 mr-1">
                                        <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                                        <polyline points="17 21 17 13 7 13 7 21"></polyline>
                                        <polyline points="7 3 7 8 15 8"></polyline>
                                    </svg> --}}
                                    Roles
                                </div>
                            </a>
                            <a  href="{{ route('users.create') }}" class="text-base  rounded-l-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
                            hover:bg-teal-700 hover:text-teal-100
                            bg-teal-100
                            text-teal-700
                            border duration-200 ease-in-out
                            border-teal-600 transition">
                                    <div class="flex leading-5">
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye w-5 h-5 mr-1">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg> --}}
                                        Add User</div>
                                    </a>
                            <a href="{{ route('permissions.index') }}"  class="text-base  rounded-l-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
                        hover:bg-teal-700 hover:text-teal-100
                        bg-teal-100
                        text-teal-700
                        border duration-200 ease-in-out
                        border-teal-600 transition">
                                <div class="flex leading-5">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye w-5 h-5 mr-1">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg> --}}
                                    Permissions
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

<span class="text-lg font-semibold inline-block py-1 px-4 uppercase rounded text-gray-900  uppercase last:mr-0 mr-1">
      Customers <hr>
</span>


@endsection







@section('content')

<div class=" pt-0 justify-center ">


    <div class="flex  justify-center">
        <div class="p-0 text-start ">














            <div class="bg-gray-100  shadow-md rounded px-8 pt-4 pb-4 mb-4 flex flex-col my-2 ">



            <form class="w-full p-2" method="POST" action="{{ route('users.store') }}">
             @csrf
                <div class="-mx-3 md:flex mb-1">
                    <div class="md:w-4/5 px-3">
                    <input class=" text-md block px-3 rounded-lg w-full
                            bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                            text-black
                            focus:placeholder-gray-500
                            focus:bg-white
                            focus:border-gray-600
                            focus:outline-none"    name="first_name" value="{{ old('first_name') }}"   autocomplete=off id="grid-first-name" type="text" placeholder="First Name">

                   </div>
                  <div class="md:w-4/5 px-3">    <input class="text-md block px-3 rounded-lg w-full
                    bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                    text-black
                    focus:placeholder-gray-500
                    focus:bg-white
                    focus:border-gray-600
                    focus:outline-none"    name="last_name"  value="{{ old('last_name') }}"   autocomplete=off   id="grid-last-name" type="text" placeholder="Last Name">

                </div>



                <div class="md:w-4/5 px-3">
                    <input id="mailbox_address" type="mailbox_address" class=" text-md block px-3 rounded-lg w-full
                          bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                          text-black
                          focus:placeholder-gray-500
                          focus:bg-white
                          focus:border-gray-600
                          focus:outline-nonel  " name="mailbox_address" value="{{ old('mailbox_address') }}" placeholder="Mail Box Address"   autocomplete="mailbox_address">

                  </div>

                  <div class="md:w-4/5 px-3">
                    <input id="email" type="email"  class=" text-md block px-3 rounded-lg w-full
                          bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                          text-black
                          focus:placeholder-gray-500
                          focus:bg-white
                          focus:border-gray-600
                          focus:outline-none   " name="email" value="{{ old('email') }}"placeholder="E-Mail Address"   autocomplete="email">

                  </div>



                  <div class="md:w-4/5 px-3">
                    <button type="submit" class="mt-0 text-lg font-semibold
                        bg-gray-700 w-full text-white rounded-lg
                        px-6   block shadow-xl hover:text-white hover:bg-green-400">
                        {{ __('Search') }}
                    </button>

                  </div>








                </div>
                </form>
                 </div>











<!-- component -->
<body class="flex items-center justify-center">
	<div class="container">
		<table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
			<thead class="text-gray-900">
				<tr class="bg-teal-400 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                    <th class="p-2 text-left">Id#</th>
					<th class="p-2 text-left">Name</th>
                    <th class="p-2 text-left">Email</th>
                    <th class="p-2 text-left">Mail Box Address</th>
                    <th class="p-2 text-left">Date/Time Added</th>
					<th class="p-2 text-left" width="110px">Actions</th>
                </tr>
            </thead>

			<tbody class="flex-1 sm:flex-none">
                @foreach ($users as $user)
                <tr class="flex flex-col flex-no wrap sm:table-row border bg-gray-100   hover:bg-gray-100  mb-2 sm:mb-0 text-gray-900">
                    <td class="border-grey-light border   p-2">{{ $user->id}}</td>
                    <td class="border-grey-light border   p-2">{{ $user->first_name .'  '.$user->last_name }}</td>
                    <td class="border-grey-light border   p-2 truncate">{{ $user->email }}</td>
                    <td class="border-grey-light border   p-2">{{  $user->mailbox_address}}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                    <td class="border-grey-light border   p-2">{{ $user->created_at->format('F d, Y h:ia') }}</td>
                    <td class="border-grey-light border   p-2 text-red-400 hover:text-red-600 hover:font-medium cursor-pointer">





        <div class="flex m-2">
            <a href="{{ route('users.edit', $user->id) }}"  class="text-base  rounded-r-none p-1  hover:scale-110 focus:outline-none flex justify-center  rounded font-bold cursor-pointer
        hover:bg-teal-700 hover:text-teal-100
        bg-teal-100
        text-teal-700
        border duration-200 ease-in-out
        border-teal-600 transition">
                <div class="flex leading-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit w-5 h-5 mr-1">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save w-5 h-5 mr-1">
                        <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                        <polyline points="17 21 17 13 7 13 7 21"></polyline>
                        <polyline points="7 3 7 8 15 8"></polyline>
                    </svg> --}}
                     </div>
                </a>
            {{-- <a  class="text-base  rounded-l-none rounded-r-none border-l-0 border-r-0  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
        hover:bg-teal-700 hover:text-teal-100
        bg-teal-100
        text-teal-700
        border duration-200 ease-in-out
        border-teal-600 transition">
                <div class="flex leading-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit w-5 h-5 mr-1">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                    Edit</div>
                </a> --}}
            <a href="{!! route('users.show', [$user->id]) !!}" class="text-base  rounded-l-none  hover:scale-110 focus:outline-none flex justify-center  p-1 rounded font-bold cursor-pointer
        hover:bg-teal-700 hover:text-teal-100
        bg-teal-100
        text-teal-700
        border duration-200 ease-in-out
        border-teal-600 transition">
                <div class="flex leading-5">
                    <svg width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye w-5 h-5 mr-1">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                     </div>
                </a>

            {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
            <button type="submit" class="text-base  rounded-l-none  hover:scale-110 focus:outline-none flex justify-center p-1 rounded font-bold cursor-pointer
            hover:bg-teal-700 hover:text-teal-100
            bg-teal-100
            text-teal-700
            border duration-200 ease-in-out
            border-teal-600 transition">
                    <div class="flex leading-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8H3a1 1 0 1 1 0-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1z"/></svg>
                        </div>
                </button>
                {!! Form::close() !!}

        </div>
    </div>

                    </td>
                </tr>
                @endforeach

			</tbody>
        </table>






<!-- component -->
<!-- This is an example component -->
<div>
	<ul class="flex pl-0 list-none rounded  ">
		<li class="relative block  leading-tight bg-gray-100 border border-gray-300 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-gray-200">
            {!! $users->links()  !!}</li>
	</ul>
</div>






	</div>
</body>

<style>
  html,
  body {
    height: 100%;
  }

  @media (min-width: 640px) {
    table {
      display: inline-table !important;
    }

    thead tr:not(:first-child) {
      display: none;
    }
  }

  td:not(:last-child) {
    border-bottom: 0;
  }

  th:not(:last-child) {
    border-bottom: 2px solid rgba(0, 0, 0, .1);
  }
</style>







        </div>
    </div>


</div><br><br><br><br><br><br><br><br>

@endsection
