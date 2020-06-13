 <ul class="pl-2 pt-0">
    {{-- @foreach ($makes as $m) --}}
    <li class="mr-3 flex-1 ">
        <a href="#"     class="block py-1 md:py-3 pl-0 md:pl-1 pr-2 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
      <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">  <b>Dashboard</b> </span>
        </a>
    </li>
    {{-- @endforeach --}}


    <li class="mr-3 flex-1 ">
        <a href="{{ route('roles.index') }}"    class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
        <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">  <b>Roles</b> </span>
        </a>
    </li>

    <li class="mr-3 flex-1 ">
        <a href="{{ route('permissions.index') }}"    class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
        <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">  <b>Permissions</b> </span>
        </a>
    </li>

    <li class="mr-3 flex-1 ">
        <a href="{{ route('users.index') }}"    class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
        <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">  <b>System Users</b> </span>
        </a>
    </li>


    <li class="mr-3 flex-1 ">
        <a href="{{ route('categories.index') }}"  class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
        <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">  <b>Categories</b> </span>
        </a>
    </li>
    <li class="mr-3 flex-1 ">
        <a href="{{ route('packages.create') }}"  class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
        <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">  <b>Packages Create</b> </span>
        </a>
    </li>
    <li class="mr-3 flex-1 ">
        <a href="{{route('packages.packageList_foreign')}}"  class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
        <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">  <b>Packages</b> </span>
        </a>
    </li>

    <li class="mr-3 flex-1 ">
        <a href="{{ route('users.customers') }}"  class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
        <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">  <b>Customers</b> </span>
        </a>
    </li>

 </ul>
