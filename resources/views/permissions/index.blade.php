@extends('layouts.backend')

@section('title', '| Users')


@section('topic')

                <div class="p-0">
                    <div class="flex justify-start items-baseline flex-wrap">
                        <div class="flex m-2">
                            <a href="{{ route('users.index') }}" class="text-base  rounded-r-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
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
                                     User
                                </div>
                            </a>


                            <a href="{{ URL::to('roles') }}" class="text-base  rounded-r-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
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
                                          Role
                                    </div>
                                </a>
                            <a href="{{ URL::to('permissions/create') }}"  class="text-base  rounded-l-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer
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
                                Add Permissions
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

               <span class="text-lg font-semibold inline-block py-1 px-2 uppercase rounded text-gray-900  uppercase last:mr-0 mr-1">
                Available Permissions <hr>
              </span>
    
@endsection




@section('content')

<div class=" pt-0 justify-center ">
    <div class="flex  justify-center">
        <div class="p-2 text-center ">

 

 
<!-- component -->
<body class="flex items-center justify-center">
	<div class="container">
		<table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
			<thead class="text-gray-900">
				<tr class="bg-teal-400 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
					<th class="p-2 text-left">Permissions</th>
					<th class="p-2 text-left" width="110px">Actions</th>
                </tr>
            </thead>

			<tbody class="flex-1 sm:flex-none">
                @foreach ($permissions as $permission)
                <tr class="flex flex-col flex-no wrap sm:table-row border bg-gray-100   hover:bg-gray-100  mb-2 sm:mb-0 text-gray-900">
                    <td class="border-grey-light border   p-2">{{ $permission->name }}</td>
                    <td class="border-grey-light border   p-2 text-red-400 hover:text-red-600 hover:font-medium cursor-pointer">

        <div class="flex m-2">
            <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}"  class="text-base  rounded-r-none p-1  hover:scale-110 focus:outline-none flex justify-center  rounded font-bold cursor-pointer
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

                  {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
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
            {{-- {!! $roles->links()  !!} --}}
        </li>
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
