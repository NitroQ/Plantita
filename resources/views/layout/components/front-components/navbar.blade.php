<nav class="bg-white border-gray-200 shadow-bottom sticky top-0 z-50 w-full">
  <div
    class="flex lg:flex-row flex-col items-center lg:justify-between bg-gray-400 py-1 lg:px-10 px-8 bg-culture gap-y-1 lg:gap-y-0">
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
      <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false"
        class="block lg:hidden ml-auto pr-5">
        <i class='bx bx-menu text-3xl'></i>
      </button>
      {{-- search input lg to xl screens --}}
      <div class="relative hidden lg:block">
        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
          <i class='bx bx-search w-4 h-4 text-gray cursor-pointer'></i>

        </div>
        <input type="text" id="search-navbar"
          class="block w-80 p-2 pl-5 text-lg text-gray-900 border-none rounded-lg bg-culture"
          placeholder="Search something...">
      </div>
      <ul class="lg:flex hidden items-center gap-x-4">
        <li>
          <a class="flex flex-col gap-y-px items-center">
            <i class='bx bx-user text-2xl'></i>
            <span class="text-lg">
              Sign In
            </span>
          </a>
        </li>
        <li>
          <a href="" class="flex flex-col gap-y-1 items-center">
            <i class='bx bxs-heart text-2xl'></i>
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
    </div>
    <div class="items-center hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-search">
      {{-- search input sm screens --}}

      <div class="relative mt-3 lg:hidden">
        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
          <i class='bx bx-search w-4 h-4 text-gray cursor-pointer'></i>
        </div>
        <input type="text" id="search-navbar"
          class="block w-full mt-10 p-2 pl-5 text-lg text-gray-900 border-none rounded-lg bg-culture"
          placeholder="Search something...">
      </div>

      <ul
        class="flex flex-col p-4 lg:p-0 mt-4 font-medium lg:flex-row lg:gap-x-5 lg:gap-y-0 gap-y-3 lg:mt-0 lg:border-0 lg:bg-white lg:items-center mr-auto">
        <li>
          <a href="#"
            class="text-black text-lg duration-300 p-2 rounded-md hover:bg-green/20 hover:font-brandon-bold"
            aria-current="page">Home</a>
        </li>
        <li>
          <a href="#"
            class="text-black text-lg duration-300 p-2 rounded-md hover:bg-green/20 hover:font-brandon-bold">Products</a>
        </li>
        <li class="lg:hidden block">
          <a class="text-black text-lg duration-300 p-2 rounded-md hover:bg-green/20 hover:font-brandon-bold"
            href="">
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
    </div>
  </div>
</nav>
