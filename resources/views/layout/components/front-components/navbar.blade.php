<!-- <nav class="bg-white border-gray-200 shadow-bottom sticky top-0 z-50 w-full">
    <div
        class="flex lg:flex-row flex-col items-center lg:justify-between bg-gray-400 py-1 lg:px-10 px-8 gap-y-1 lg:gap-y-0">
        <p class="uppercase text-sm">
            WHEN IT COMES TO PLANTS, IN
            <span class="font-bold italic">TITA WE TRUST</span>
        </p>
        <div class="flex items-center gap-x-4">
            <i class='bx bxl-facebook-circle text-2xl text-green'></i>
            <i class='bx bxl-tiktok text-2xl text-green'></i>
            <img src="{{ asset('images/icons_logos/twitter-logo.svg') }}" alt="Twitter logo">
            <i class='bx bxl-instagram text-2xl text-green'></i>
        </div>
    </div>
    <div class="flex flex-wrap items-center gap-x-5 py-4 px-10">
        <a href="{{ route('index') }}">
            <img src="{{ asset('images/icons_logos/plantita-logo.svg') }}" class="h-12 mr-3" alt="Plantita Logo" />
        </a>
        <div class="flex items-center ml-auto lg:order-2 gap-x-5">
            <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                aria-expanded="false" class="block lg:hidden ml-auto pr-5">
                <i class='bx bx-menu text-3xl'></i>
            </button>
            {{-- search input lg to xl screens --}}
            <div class="relative hidden lg:block">
                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                    <i class='bx bx-search w-4 h-4 text-gray cursor-pointer'></i>

                </div>
                <input type="text" id="search-navbar"
                    class="block w-80 p-2 pl-5 text-lg border-none focus:outline-none rounded-lg bg-gray-400 text-gray-500"
                    placeholder="Search something...">
            </div>
            <ul class="lg:flex hidden items-center gap-x-4">
                <li>
                    <a class="flex flex-col gap-y-px items-center" href="{{ route('signin') }}">
                        <i class='bx bx-user text-2xl'></i>
                        <span class="text-lg">
                            Sign In
                        </span>
                    </a>
                </li>
                <li>
                    <a href="" class="flex flex-col gap-y-1 items-center">
                        <img src="{{ asset('images/icons_logos/water-can.svg') }}" alt="">
                        <span class="text-lg">
                            Likes
                        </span>
                    </a>
                </li>
                <li>
                    <a href="" class="flex flex-col gap-y-1 items-center">
                        <i class='bx bx-basket text-2xl'></i>
                        <span class="text-lg">
                            Basket
                        </span>
                    </a>
                </li>
            </ul>

            {{-- FOR LOGIN --}}
            {{-- User Dropdown menu --}}
            <div class="lg:block hidden">

                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center gap-x-1">
                    <i class='bx bx-user-circle text-4xl'></i>
                    <div class="flex flex-col items-start">
                        <p class="font-brandon-bold text-base leading-4">@frankfn</p>
                        <p class="text-base leading-1">frankvincent@gmail.com</p>
                    </div>
                    <i id="userDown" class='bx bx-chevron-down text-3xl'></i>
                </button>

                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="space-y-2 p-2">
                        <li
                            class="flex justify-between items-center cursor-pointer hover:bg-green-200 p-1 hover:p-2     duration-300 rounded-md">
                            <span class="text-md">My Likes</span>
                        </li>
                        <li
                            class="flex justify-between items-center cursor-pointer hover:bg-green-200 p-1 hover:p-2     duration-300 rounded-md">
                            <span class="text-md">My Cart</span>
                        </li>
                        <li
                            class="flex justify-between items-center cursor-pointer hover:bg-green-200 p-1 hover:p-2     duration-300 rounded-md">
                            <span class="text-md">My Transactions</span>
                        </li>
                        <li
                            class="flex justify-between items-center cursor-pointer hover:bg-green-200 p-1 hover:p-2     duration-300 rounded-md">
                            <span class="text-md">Log-out</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="items-center hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-search">
            {{-- search input sm screens --}}
            <div class="relative mt-3 lg:hidden">
                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                    <i class='bx bx-search w-4 h-4 text-gray cursor-pointer'></i>
                </div>
                <input type="text" id="search-navbar"
                    class="block w-full mt-5 p-2 pl-5 text-lg text-gray-900 border-none rounded-lg bg-gray-400"
                    placeholder="Search something...">
            </div>

            <ul
                class="flex flex-col p-4 lg:p-0 mt-4 font-medium lg:flex-row lg:gap-x-5 lg:gap-y-0 gap-y-3 lg:mt-0 lg:border-0 lg:bg-white lg:items-center mr-auto">
                <li>
                    <a href="{{ route('index') }}"
                        class="text-black text-lg duration-300 p-2 rounded-md hover:bg-green-200/20 hover:font-brandon-bold"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ route('product') }}"
                        class="text-black text-lg duration-300 p-2 rounded-md hover:bg-green-200/20 hover:font-brandon-bold">Products</a>
                </li>
                <li class="lg:hidden block">
                    <a class="text-black text-lg duration-300 p-2 rounded-md hover:bg-green/20 hover:font-brandon-bold"
                        href="{{ route('signin') }}">
                        <span class="text-lg">
                            Sign In
                        </span>
                    </a>
                </li>
                <li class="lg:hidden block">
                    <a class="text-black text-lg duration-300 p-2 rounded-md hover:bg-green/20 hover:font-brandon-bold"
                        href="">
                        <span class="text-lg">
                            Likes
                        </span>
                    </a>
                </li>
                <li class="lg:hidden block">
                    <a class="text-black text-lg duration-300 p-2 rounded-md hover:bg-green/20 hover:font-brandon-bold"
                        href="">
                        <span class="text-lg">
                            Basket
                        </span>
                    </a>
                </li>
            </ul>
            <div class="lg:hidden block">
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center gap-x-1">
                    <i class='bx bx-user-circle text-4xl'></i>
                    <div class="flex flex-col items-start">
                        <p class="font-brandon-bold text-base leading-4">@frankfn</p>
                        <p class="text-base leading-1">frankvincent@gmail.com</p>
                    </div>
                    <i id="userDown" class='bx bx-chevron-down text-3xl'></i>
                </button>

                {{-- User Dropdown menu --}}
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="space-y-2 p-2">
                        <li
                            class="flex justify-between items-center cursor-pointer hover:bg-green-200 p-1 hover:p-2     duration-300 rounded-md">
                            <span class="text-md">My Likes</span>
                        </li>
                        <li
                            class="flex justify-between items-center cursor-pointer hover:bg-green-200 p-1 hover:p-2     duration-300 rounded-md">
                            <span class="text-md">My Cart</span>
                        </li>
                        <li
                            class="flex justify-between items-center cursor-pointer hover:bg-green-200 p-1 hover:p-2     duration-300 rounded-md">
                            <span class="text-md">My Transactions</span>
                        </li>
                        <li
                            class="flex justify-between items-center cursor-pointer hover:bg-green-200 p-1 hover:p-2     duration-300 rounded-md">
                            <span class="text-md">Log-out</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav> -->
<nav class="bg-white shadow-bottom fixed z-50 w-full">
  <div class="flex items-center justify-between bg-gray-400 py-1 lg:px-16 px-8">
    <p class="uppercase text-sm">
      WHEN IT COMES TO PLANTS, IN
      <span class="font-bold italic">TITA WE TRUST</span>
    </p>
    <div class="hidden md:flex items-center gap-x-2">
      <a href=""><i class='bx bxl-facebook-circle text-xl text-green-200 hover:text-green-200/70'></i></a>
      <a href=""><i class='bx bxl-tiktok text-xl text-green-200 hover:text-green-200/70'></i></a>
      <a href="" class="text-green-200">
        <img src="{{ asset('images/icons_logos/twitter-logo.svg') }}" alt="Twitter logo" class="hover:opacity-70" style="height: 1rem;" />
      </a>
      <a href=""><i class='bx bxl-instagram text-xl text-green-200 hover:text-green-200/70'></i></a>
    </div>
  </div>
  <div class="flex flex-wrap md:flex-nowrap items-center pb-5 pt-3 px-5 lg:px-16 w-full justify-between">
    <a href="{{ route('index') }}" class="mr-10">
      <img src="{{ asset('images/icons_logos/plantita-logo.svg') }}" class="h-12 w-40" alt="Plantita Logo" />
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="mt-2 inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg lg:hidden hover:bg-gray-100" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
      </svg>
    </button>
    <div class="hidden mt-2 lg:flex items-center justify-between w-full">
      <ul class="flex space-x-5 text-lg">
        <a href="{{ route('index') }}" class="{{ request()->is('/') ? 'bg-green-100 text-green-200 rounded font-brandon-bold' : '' }}">
          <li class="px-3 py-1 rounded hover:bg-green-100 hover:font-brandon-bold hover:text-green-200">Home</li>
        </a>
        <a href="{{ route('product') }}" class="{{ request()->is('product') ? 'bg-green-100 text-green-200 rounded font-brandon-bold' : '' }}">
          <li class="px-3 py-1 rounded hover:bg-green-100 hover:font-brandon-bold hover:text-green-200">Products</li>
        </a>
      </ul>
      <div class="flex space-x-8">
        <div class="relative top-2">
          <div class="absolute top-3.5 right-0 flex items-center pr-3">
            <i class='bx bx-search w-4 h-4 text-gray cursor-pointer'></i>
          </div>
          <input type="text" class="w-80 p-2 pl-5 text-lg border-none focus:ring-green-200/20 focus:border-green-200/20 rounded-lg bg-gray-400 text-gray-500 placeholder-gray-500/70" placeholder="Search something...">
        </div>
        <!-- only show if not logged in -->
        <ul class="flex items-center space-x-3">
          <a href="{{ route('signin') }}" class="p-1 rounded hover:bg-green-100 w-12 {{ request()->is('signin') ? 'bg-green-100 rounded' : '' }}">
            <li class="flex flex-col items-center">
              <img src="{{ asset('images/icons_logos/navuser-icon.svg') }}" class="w-7 h-7" alt="" />
              <span class="text-sm">Sign-In</span>
            </li>
          </a>
          <a href="{{ route('product') }}" class="p-1 rounded hover:bg-green-100 w-12 {{ request()->is('product') ? 'bg-green-100 rounded' : '' }}">
            <li class="flex flex-col items-center">
              <img src="{{ asset('images/icons_logos/water-can.svg') }}" class="w-7 h-7" alt="" />
              <span class="text-sm">Likes</span>
            </li>
          </a>
          <a href="{{ route('basket') }}" class="p-1 rounded hover:bg-green-100 w-12 {{ request()->is('basket') ? 'bg-green-100 rounded' : '' }}">
            <li class="flex flex-col items-center">
              <img src="{{ asset('images/icons_logos/navbasket-icon.svg') }}" class="w-7 h-7" alt="" />
              <span class="text-sm">Basket</span>
            </li>
          </a>
        </ul>
        <!-- only show when user is logged in -->
        <div class="mt-2 hidden">
          <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center space-x-2">
            <i class='bx bx-user-circle text-4xl'></i>
            <div class="flex flex-col items-start">
              <p class="font-brandon-bold text-base leading-4">@frankfn</p>
              <p class="text-base leading-1 whitespace-nowrap">frankvincent@gmail.com</p>
            </div>
            <i id="userDown" class='bx bx-chevron-down text-3xl'></i>
          </button>
          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="space-y-2 p-2">
              <a href="{{ route('product') }}"><li class="flex justify-between items-center p-2 cursor-pointer hover:bg-green-100 duration-300 rounded-md">
                <span class="text-md">My Likes</span>
              </li></a>
              <a href="{{ route('basket') }}"><li class="flex justify-between items-center p-2 cursor-pointer hover:bg-green-100 duration-300 rounded-md">
                <span class="text-md">My Cart</span>
              </li></a>
              <a href="{{ route('transaction') }}"><li class="flex justify-between items-center p-2 cursor-pointer hover:bg-green-100 duration-300 rounded-md">
                <span class="text-md">My Transactions</span>
              </li></a>
              <a href="{{ route('index') }}"><li class="flex justify-between items-center p-2 cursor-pointer hover:bg-green-100 duration-300 rounded-md">
                <span class="text-md">Log-out</span>
              </li></a>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- mobile view -->
    <div class="hidden mt-5 w-full" id="navbar-default">
      <ul class="block">
        <a href="{{ route('index') }}">
          <li class="mb-2 p-2 rounded hover:bg-green-100 hover:font-brandon-bold hover:text-green-200">Home</li>
        </a>
        <a href="{{ route('product') }}">
          <li class="mb-2 p-2 rounded hover:bg-green-100 hover:font-brandon-bold hover:text-green-200">Products</li>
        </a>
        <a href="{{ route('product') }}">
          <li class="mb-2 p-2 rounded hover:bg-green-100 hover:font-brandon-bold hover:text-green-200">Likes</li>
        </a>
        <a href="{{ route('basket') }}">
          <li class="mb-2 p-2 rounded hover:bg-green-100 hover:font-brandon-bold hover:text-green-200">Basket</li>
        </a>
        <a href="{{ route('signin') }}">
          <li class="mb-2 p-2 rounded hover:bg-green-100 hover:font-brandon-bold hover:text-green-200">Sign-In</li>
        </a>
      </ul>
    </div>
  </div>
</nav>