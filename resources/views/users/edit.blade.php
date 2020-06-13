@extends('layouts.backend')

@section('title', 'Page Title')










@section('topic')
     <div class="p-0">


                <div class="p-2">
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
                                         Roles
                                    </div>
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
                
            <span class="text-lg  m-2  font-semibold inline-block   px-2 uppercase rounded text-gray-900  uppercase last:mr-0 mr-1">
                Edit  System User <hr>
              </span>
@endsection



@section('content')
<div class="pt-0  ">




    <div class="flex  justify-center">
       


	<div class="container px-6 mx-auto pt-8 justify-center  flex-wrap flex-col md:flex-row items-center">


<div class="bg-gray-100  shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 ">
    <h1 class="text-black">Edit {{$user->first_name .' '.$user->last_name }}</h1>

    <hr>
    <br>


    {{-- @include ('errors.list') --}}

    {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}
      @csrf
    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-black  text-xs font-bold mb-2" for="grid-first-name">
          First Name
        </label>
        <input class=" text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                text-black
                focus:placeholder-gray-500
                focus:bg-white
                focus:border-gray-600
                focus:outline-none  @error('first_name') border-red-500 @enderror" name="first_name" value="{{ $user->first_name  }}" required autocomplete=off id="grid-first-name" type="text"  >
        @error('first_name')
        <p class="text-red-700 text-sm italic mt-4">
            {{ $message }}
        </p>
      @enderror
       </div>
      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-black  text-xs font-bold mb-2" for="grid-last-name">
          Last Name
        </label>
        <input class="text-md block px-3 py-2 rounded-lg w-full
        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
        text-black
        focus:placeholder-gray-500
        focus:bg-white
        focus:border-gray-600
        focus:outline-none   @error('last_name') border-red-500 @enderror" name="last_name" value="{{ $user->last_name }}" required autocomplete=off   id="grid-last-name" type="text"  >
            @error('last_name')
            <p class="text-red-700 text-sm italic mt-4">
                {{ $message }}
            </p>
          @enderror
    </div>
    </div>


      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="grid-phone_no">
            {{ __('Contact #') }}:
          </label>
          <input id="phone_no" type="phone_no" class=" text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                text-black
                focus:placeholder-gray-500
                focus:bg-white
                focus:border-gray-600
                focus:outline-none @error('phone_no') border-red-500 @enderror" name="phone_no" value="{{ $user->hone_no  }}" required autocomplete="phone_no">

            @error('phone_no')
                <p class="text-red-700 text-sm italic mt-4">
                    {{ $message }}
                </p>
             @enderror
        </div>
      </div>

      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="grid-home_address">
            {{ __('Delivery Address') }}:
          </label>
          <input id="home_address" type="home_address" class=" text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                text-black
                focus:placeholder-gray-500
                focus:bg-white
                focus:border-gray-600
                focus:outline-nonel @error('home_address') border-red-500 @enderror" name="home_address" value="{{  $user->home_address  }}" required autocomplete="home_address">

            @error('home_address')
                <p class="text-red-700 text-sm italic mt-4">
                    {{ $message }}
                </p>
             @enderror
        </div>

      </div>







      <style>
        .custom-label input:checked + svg {
            display: block !important;
        }
        </style>



<h5><b class='form-group text-black'>Give Role</b></h5>

           <div class='form-group'>
                @foreach ($roles as $role)
                        <label class="custom-label flex">
                            <div class="
                            shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                            {{-- <input type="checkbox" name="roles[]" class="hidden"  value="{{ $role->id }}"> --}}
                            {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}

                            <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
                            </div>
                            <span class="select-none  text-black">{{ Form::label($role->name, $role->name) }}<br></span>
                    </label>
                @endforeach
            </div>


            <div class="flex flex-wrap">
                <button type="submit" class="mt-3 text-lg font-semibold
                bg-gray-800 w-full text-white rounded-lg
                px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                {{ __('Update User') }}
            </button>
                {{-- <button type="submit" class="inline-block align-middle text-center select-none border font-bold whitespace-no-wrap py-2 px-4 rounded text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700">
                    {{ __('Register') }}
                </button> --}}

            <p class="w-full text-xs text-center text-gray-700 mt-8 -mb-4">

                {{-- <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a> --}}
            </p>
        </div>
    </form>
     </div>
	</div>
 </div><br><br><br><br><br><br>
@stop







