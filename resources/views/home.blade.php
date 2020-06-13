@extends('layouts.app')

@section('content')
    <div class="pt-24  flex items-center">




      <div class="px-8 flex flex-wrap ">
        <div class="flex  -mx-2">

          <div class="w-1/3  px-4">
            <div class=" h-12">
                  <div class="w-1/2 bg-gray-300  ">
                    <div class="box-content h-20 w-64 p-4 border-2 text-black border-gray-900 bg-gray-200">
                      <h2 class="font-bold underline">My Shipping Address :</h2>
                      <p> 123Shiptosure</p>
                      <p>New York City</p>
                      <p>USA</p>
                    </div>
                  </div>
            </div>
          </div>











          <div class="bg-white border-transparent rounded-lg shadow-lg">
                        <div class="bg-gray-400 border-b-2 border-gray-500 rounded-tl-lg rounded-tr-lg p-2">
                            <h5 class="font-bold uppercase text-gray-600">Table</h5>
                        </div>
                        <div class="p-5">
                            <table class="w-full p-5 text-gray-700">
                                <thead>
                                    <tr>
                                        <th class="text-left text-blue-900 px-4 py-2 border-black border-2">Name</th>
                                        <th class="text-left text-blue-900 px-4 py-2 border-black border-2">Side</th>
                                        <th class="text-left text-blue-900 px-4 py-2 border-black border-2">date</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td  class=" border-black border-2 px-4 py-2">D2222r</td>
                                        <td  class=" border-black border-2 px-4 py-2">A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
                                        <td  class=" border-black border-2 px-4 py-2">Sith</td>
                                    </tr>
                                    <tr>
                                       <td  class=" border-black border-2 px-4 py-2">Darth </td>
                                        <td  class=" border-black border-2 px-4 py-2">A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
                                        <td  class=" border-black border-2 px-4 py-2">Sit777h</td>
                                    </tr>
                                    <tr>
                                        <td  class=" border-black border-2 px-4 py-2">Darth  </td>
                                        <td  class=" border-black border-2 px-4 py-2">A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
                                        <td  class=" border-black border-2 px-4 py-2">Sith455</td>
                                    </tr>
                                </tbody>
                            </table>

                            <p class="py-2"><a href="#">See More issues...</a></p>

                        </div>
                    </div>
                    <!--/table Card-->
                </div>










          <div class="w-12/12 px-4">
            <div class=" h-12">
              <div class="w-12/12 box-content border-2 text-black  bg-gray-300  border-gray-900 p-4 ">

              <h1> In Transit
                <i class="fa fa-inbox text-blue-900 " aria-hidden="true"></i>
             </h1>
              <table class="table-auto   border-2  border-black text-black">
                  <thead class="table-auto border-2  border-black bg-gray-400 text-black">
                  <tr>
                      <th class="px-4 py-2 border-black border-2">Package #</th>
                      <th class="px-4 py-2 border-black  border-2">Item</th>
                      <th class="px-4 py-2 border-black border-2">Date</th>
                      <th class="px-4 py-2 border-black border-2">Views</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td class=" border-black border-2 px-4 py-2">858</td>
                      <td class=" border-black border-2 px-4 py-2">A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
                      <td class=" border-black border-2 px-4 py-2">858</td>
                      <td class=" border-black border-2 px-4 py-2">
                        <button class="bg-blue-400 text-white active:bg-teal-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="text-white-900"><path class="heroicon-ui text-white-900" d="M17.56 17.66a8 8 0 01-11.32 0L1.3 12.7a1 1 0 010-1.42l4.95-4.95a8 8 0 0111.32 0l4.95 4.95a1 1 0 010 1.42l-4.95 4.95zm-9.9-1.42a6 6 0 008.48 0L20.38 12l-4.24-4.24a6 6 0 00-8.48 0L3.4 12l4.25 4.24zM11.9 16a4 4 0 110-8 4 4 0 010 8zm0-2a2 2 0 100-4 2 2 0 000 4z"/></svg>
                        </button>
                      </td>
                  </tr>
                  <tr>
                    <td class=" border-black border-2 px-4 py-2">858</td>
                      <td class=" border-black border-2 px-4 py-2">A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
                      <td class=" border-black border-2 px-4 py-2">858</td>
                      <td class=" border-black border-2 px-4 py-2">
                        <button class="bg-blue-400 text-white active:bg-teal-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="text-white-900"><path class="heroicon-ui text-white-900" d="M17.56 17.66a8 8 0 01-11.32 0L1.3 12.7a1 1 0 010-1.42l4.95-4.95a8 8 0 0111.32 0l4.95 4.95a1 1 0 010 1.42l-4.95 4.95zm-9.9-1.42a6 6 0 008.48 0L20.38 12l-4.24-4.24a6 6 0 00-8.48 0L3.4 12l4.25 4.24zM11.9 16a4 4 0 110-8 4 4 0 010 8zm0-2a2 2 0 100-4 2 2 0 000 4z"/></svg>
                        </button>
                      </td>
                  </tr>
                  <tr>
                    <td class=" border-black border-2 px-4 py-2">858</td>
                      <td class=" border-black border-2 px-4 py-2">A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
                      <td class=" border-black border-2 px-4 py-2">858</td>
                      <td class=" border-black border-2 px-4 py-2">
                        <button class="bg-blue-400 text-white active:bg-teal-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="text-white-900"><path class="heroicon-ui text-white-900" d="M17.56 17.66a8 8 0 01-11.32 0L1.3 12.7a1 1 0 010-1.42l4.95-4.95a8 8 0 0111.32 0l4.95 4.95a1 1 0 010 1.42l-4.95 4.95zm-9.9-1.42a6 6 0 008.48 0L20.38 12l-4.24-4.24a6 6 0 00-8.48 0L3.4 12l4.25 4.24zM11.9 16a4 4 0 110-8 4 4 0 010 8zm0-2a2 2 0 100-4 2 2 0 000 4z"/></svg>
                        </button>
                      </td>
                  </tr>

                  </tbody>
              </table>


              <br><br>


                  <h1 class="">  Claimed Package(s)
                    <i class="fa fa-sign-out text-blue-900  " aria-hidden="true"></i>
                 </h1>
                  <table class="table-auto   border-2  border-black text-black">
                    <thead class="table-auto border-2  border-black bg-gray-400 text-black">
                    <tr>
                        <th class="px-4 py-2 border-black border-2">Package #</th>
                        <th class="px-4 py-2 border-black  border-2">Item</th>
                        <th class="px-4 py-2 border-black border-2">Date</th>
                        <th class="px-4 py-2 border-black border-2">Views</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td class=" border-black border-2 px-4 py-2">858</td>
                        <td class=" border-black border-2 px-4 py-2">A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
                        <td class=" border-black border-2 px-4 py-2">858</td>
                        <td class=" border-black border-2 px-4 py-2">
                          <button class="bg-blue-400 text-white active:bg-teal-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="text-white-900"><path class="heroicon-ui text-white-900" d="M17.56 17.66a8 8 0 01-11.32 0L1.3 12.7a1 1 0 010-1.42l4.95-4.95a8 8 0 0111.32 0l4.95 4.95a1 1 0 010 1.42l-4.95 4.95zm-9.9-1.42a6 6 0 008.48 0L20.38 12l-4.24-4.24a6 6 0 00-8.48 0L3.4 12l4.25 4.24zM11.9 16a4 4 0 110-8 4 4 0 010 8zm0-2a2 2 0 100-4 2 2 0 000 4z"/></svg>
                          </button>
                        </td>
                    </tr>
                    <tr>
                      <td class=" border-black border-2 px-4 py-2">858</td>
                        <td class=" border-black border-2 px-4 py-2">A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
                        <td class=" border-black border-2 px-4 py-2">858</td>
                        <td class=" border-black border-2 px-4 py-2">
                          <button class="bg-blue-400 text-white active:bg-teal-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="text-white-900"><path class="heroicon-ui text-white-900" d="M17.56 17.66a8 8 0 01-11.32 0L1.3 12.7a1 1 0 010-1.42l4.95-4.95a8 8 0 0111.32 0l4.95 4.95a1 1 0 010 1.42l-4.95 4.95zm-9.9-1.42a6 6 0 008.48 0L20.38 12l-4.24-4.24a6 6 0 00-8.48 0L3.4 12l4.25 4.24zM11.9 16a4 4 0 110-8 4 4 0 010 8zm0-2a2 2 0 100-4 2 2 0 000 4z"/></svg>
                          </button>
                        </td>
                    </tr>
                    <tr>
                      <td class=" border-black border-2 px-4 py-2">858</td>
                        <td class=" border-black border-2 px-4 py-2">A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
                        <td class=" border-black border-2 px-4 py-2">858</td>
                        <td class=" border-black border-2 px-4 py-2">
                          <button class="bg-blue-400 text-white active:bg-teal-600 font-bold uppercase text-xs px-4 py-2 rounded-full shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="text-white-900"><path class="heroicon-ui text-white-900" d="M17.56 17.66a8 8 0 01-11.32 0L1.3 12.7a1 1 0 010-1.42l4.95-4.95a8 8 0 0111.32 0l4.95 4.95a1 1 0 010 1.42l-4.95 4.95zm-9.9-1.42a6 6 0 008.48 0L20.38 12l-4.24-4.24a6 6 0 00-8.48 0L3.4 12l4.25 4.24zM11.9 16a4 4 0 110-8 4 4 0 010 8zm0-2a2 2 0 100-4 2 2 0 000 4z"/></svg>
                          </button>
                        </td>
                    </tr>

                    </tbody>
                </table>

              </div>
              </div>



            </div>
          </div>

        </div>



</div>


        {{-- <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6">
            <div>1</div>
            <!-- ... -->
            <div>9</div>
          </div> --}}



        </div><br><br><br><br><br>
      </div><br><br><br><br><br>
    </div><br><br><br><br><br>
  </div><br><br><br><br><br>
</div><br><br><br><br><br>
</div><br><br><br><br><br>
@endsection
