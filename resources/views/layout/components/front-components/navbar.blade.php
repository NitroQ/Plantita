
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
      <form action="{{ route('product') }}" method="GET" id="searchNav">
        <div class="relative top-2">
          <div class="absolute top-3.5 right-0 flex items-center pr-3">
              {{-- <i class='bx bx-search w-4 h-4 text-gray cursor-pointer'></i> --}}
              <i class="mt-1 mr-3 bx bx-search cursor-pointer" onclick="document.getElementById('searchNav').submit()"></i>
            </form>
          </div>
          {{-- <input type="text" class="w-80 p-2 pl-5 text-lg border-none focus:ring-green-200/20 focus:border-green-200/20 rounded-lg bg-gray-400 text-gray-500 placeholder-gray-500/70" placeholder="Search something..."> --}}
          <input type="text" name="search" id="searchInput" class="w-80 p-2 pl-5 text-lg border-none focus:ring-green-200/20 focus:border-green-200/20 rounded-lg bg-gray-400 text-gray-500 placeholder-gray-500/70" placeholder="Search...">
        </div>
      </form>
        @guest
        <ul class="flex items-center space-x-3">
          <a href="{{ route('signin') }}" class="p-1 rounded hover:bg-green-100 w-12 {{ request()->is('signin') ? 'bg-green-100 rounded' : '' }}">
            <li class="flex flex-col items-center">
              <img src="{{ asset('images/icons_logos/navuser-icon.svg') }}" class="w-7 h-7" alt="" />
              <span class="text-sm">Sign-In</span>
            </li>
          </a>
          <a href="{{ route('view-likes') }}" class="p-1 rounded hover:bg-green-100 w-12 {{ request()->is('product') ? 'bg-green-100 rounded' : '' }}">
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
        @endguest
        @auth
        <div class="mt-2">
          <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center space-x-2">
            <i class='bx bx-user-circle text-4xl'></i>
            <div class="flex flex-col items-start">
              <p class="font-brandon-bold text-base leading-4">@ {{ auth()->user()->username }}</p>
              <p class="text-base leading-1 whitespace-nowrap">{{ auth()->user()->email }}</p>
            </div>
            <i id="userDown" class='bx bx-chevron-down text-3xl'></i>
          </button>
          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="space-y-2 p-2">
              <a href="{{ route('view-likes') }}"><li class="flex justify-between items-center p-2 cursor-pointer hover:bg-green-100 duration-300 rounded-md">
                <span class="text-md">My Likes</span>
              </li></a>
              <a href="{{ route('basket') }}"><li class="flex justify-between items-center p-2 cursor-pointer hover:bg-green-100 duration-300 rounded-md">
                <span class="text-md">My Cart</span>
              </li></a>
              <a href="{{ route('transaction') }}"><li class="flex justify-between items-center p-2 cursor-pointer hover:bg-green-100 duration-300 rounded-md">
                <span class="text-md">My Transactions</span>
              </li></a>
              @if(auth()->user()->role == 'admin')
              <a href="{{ route('admin.dashboard') }}"><li class="flex justify-between items-center p-2 cursor-pointer hover:bg-green-100 duration-300 rounded-md">
                <span class="text-md">Admin Dashboard</span>
              </li></a>
             @endif
              <a href="{{ route('logout') }}"><li class="flex justify-between items-center p-2 cursor-pointer hover:bg-green-100 duration-300 rounded-md">
                <span class="text-md">Log-out</span>
              </li></a>
            </ul>
          </div>
        </div>
        @endauth
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
        <a href="{{ route('view-likes') }}">
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