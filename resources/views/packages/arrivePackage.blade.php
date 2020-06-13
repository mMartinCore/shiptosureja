@extends('layouts.backend')

@section('title', '| Create New Package')

@section('content')

        {{ Form::open(array('route' => 'posts.store')) }}
             {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block')) }}
         {{ Form::close() }}



<!-- component -->
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 mt-24">
    <div class="-mx-3  md:flex mb-6">



        <div class=" md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-weight">
           Package Weight
        </label>
        <input name="weight" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid" type="text" >
        <p class="text-red text-xs italic">Please fill out this field.</p>
      </div>

      <div class="  md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-price">
            discount price
        </label>
        <input name="discount_price" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text">
        <p class="text-red text-xs italic">Please fill out this field.</p>
    </div>

      <div class=" md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-received_at_mailbox_date">
         Date Received at Mailbox
        </label>
        <input name="received_at_mailbox_date" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" >
        <p class="text-red text-xs italic">Please fill out this field.</p>
    </div>

          <div class=" md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-received_at_mailbox_date">
         Date Received at Mailbox
        </label>
        <input name="received_at_mailbox_date" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" >
        <p class="text-red text-xs italic">Please fill out this field.</p>
    </div>





    </div>





    <div class="-mx-3  md:flex mb-6">

        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-category_id">
               ITEM category
               </label>
               <select name="category_id" class="form-select   appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4">
                <option>ELECTRONIC</option>
                <option>JEWLRY</option>
                <option>FABRIC</option>
                <option>AUTO</option>
              </select>
              <p class="text-red text-xs italic">Please fill out this field.</p>
        </div>


        <div class=" md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-weight">
           Package Weight
        </label>
        <input name="weight" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Jane">
        <p class="text-red text-xs italic">Please fill out this field.</p>
      </div>

      <div class="  md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-price">
            Price
        </label>
        <input name="price" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="Doe">
        <p class="text-red text-xs italic">Please fill out this field.</p>
    </div>




    </div>









    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-full px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-Description">
          Description
        </label>
        <input name="description" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-Description" type="text" placeholder="******************">
        <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
      </div>
    </div>





    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-Description">
            remarks
          </label>
          <input name="remarks" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-remarks" type="text" placeholder="Anything important about the package !">
          <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
        </div>
      </div>




  </div>














@endsection
