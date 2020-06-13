








       <div class="pt-0  ">
               <div class="flex  justify-center">
                 <div class="container px-6 mx-auto pt-8 justify-center  flex-wrap flex-col md:flex-row items-center">
                  <div class="bg-gray-100  shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 ">
                    <h1 class="text-black">Viewing  {{$user->first_name .' '.$user->last_name }}</h1>

                     <hr>
                     <br>


 
 
 
    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-black  text-xs font-bold mb-2" for="grid-first-name">
          First Name :{{ $user->first_name  }}
        </label>
 
       
       </div>
      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-black  text-xs font-bold mb-2" for="grid-last-name">
          Last Name :{{ $user->last_name }}
        </label>
        
    </div>
    </div>


      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="grid-phone_no">
            {{ __('Contact #') }} : {{ $user->phone_no  }}
          </label> 
        </div>
      </div>

      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="grid-home_address">
            {{ __('Delivery Address ') }}: {{  $user->home_address  }}
          </label> 
        </div>

      </div>

      <style>
        .custom-label input:checked + svg {
            display: block !important;
        }
        </style>



<h5><b class='form-group text-black'>Give Role</b></h5>

           <div class='form-group'>
                {{-- @foreach ($user->role as $role)
                        <label class="custom-label flex">
                            <div class="
                            shadow w-6 h-6 p-1 flex justify-center items-center mr-2"> --}}
                            {{-- <input type="checkbox" name="roles[]" class="hidden"  value="{{ $role->id }}"> --}}
                            {{-- {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }} --}}

                            {{-- <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
                            </div>
                            <span class="select-none  text-black">{{ Form::label($role->name, $role->name) }}<br></span> --}}
                    {{-- </label> --}}
                {{-- @endforeach --}}
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
 </div><br>