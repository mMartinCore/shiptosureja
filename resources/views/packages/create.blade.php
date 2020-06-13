@extends('layouts.backend')

@section('title', '| Create New Package')
@section('topic')

<label class="block uppercase tracking-wide text-gray-900 text-xs font-bold mb-2" for="grid-weight">
    Assign Package to Customer
 </label>
@endsection
@section('content')




<!-- component -->
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 mt-24">

    <form class="w-full p-6" method="POST" action="{{ route('packages.store') }}">
         @csrf
    <div class="-mx-3  md:flex mb-6">
        <div class=" md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-weight">
           Package Weight
        </label>
        <input name="weight" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid" type="text" >
         @error('weight')
            <p class="text-red-700 text-sm italic mt-4">
                {{ $message }}
            </p>
           @enderror
      </div>

      <div class="  md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-price">
            discount price
        </label>
        <input name="discount_price" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text">
         @error('discount_price')
            <p class="text-red-700 text-sm italic mt-4">
                {{ $message }}
            </p>
           @enderror
    </div>

      <div class=" md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-received_at_mailbox_date">
         Date Received at Mailbox
        </label>
        <input name="received_at_mailbox_date" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" >
         @error('received_at_mailbox_date')
            <p class="text-red-700 text-sm italic mt-4">
                {{ $message }}
            </p>
           @enderror
    </div>

          <div class=" md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-received_at_mailbox_date">
         Date  shipped
        </label>
        <input name="ship_date" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" >
         @error('ship_date')
            <p class="text-red-700 text-sm italic mt-4">
                {{ $message }}
            </p>
           @enderror
    </div>





    </div>
    




    <div class="-mx-3  md:flex mb-6">

        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-category_id">
               ITEM category
               </label>
               <select name="category_id" class="form-select   appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4">
                <option value="1" >ELECTRONIC</option>
                <option value="2" >JEWLRY</option>
                <option value="3">FABRIC</option>
                <option value="4">AUTO</option>
              </select>
               @error('category_id')
            <p class="text-red-700 text-sm italic mt-4">
                {{ $message }}
            </p>
           @enderror
        </div>


        <div class=" md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-weight">
          Company/organization package received from
        </label>
        <input name="issuing_organization" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="eg. ShipToSueJa">
        @error('issuing_organization')
        <p class="text-red-700 text-sm italic mt-4">
            {{ $message }}
        </p>
       @enderror
      </div>






    </div>









    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-full px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-Description">
          Description
        </label>
        <input name="description" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-Description" type="text" placeholder="Red T-shit">
        @error('description')
        <p class="text-red-700 text-sm italic mt-4">
            {{ $message }}
        </p>
       @enderror
      </div>
    </div>





    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-Description">
            remarks
          </label>
          <input name="remarks" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-remarks" type="text" placeholder="Anything important about the package !">
          @error('remarks')
          <p class="text-red-700 text-sm italic mt-4">
              {{ $message }}
          </p>
         @enderror
        </div>
      </div>





      <div class="flex flex-wrap">
            <button type="submit" class="mt-3 text-lg font-semibold
            bg-gray-800 w-full text-white rounded-lg
            px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
            {{ __('Assigned Package') }}
        </button>
      </div>




    </form>
  </div>






@endsection
