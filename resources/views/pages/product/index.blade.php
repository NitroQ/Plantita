@extends('layout.client.front')
@section('title', 'Products')
@section('content')

<section>
  <div class="grid grid-cols-10 gap-16">
    <div class="col-span-2">
      <p class="text-lg font-brandon-bold mb-2">Search</p>
      <div class="relative">
        <input type="text" class="w-full border-none rounded-lg placeholder-gray-500/70" placeholder="Search Plants">
        <div class="absolute top-3 right-0 flex items-center pr-3">
          <i class='bx bx-search w-4 h-4 text-gray cursor-pointer'></i>
        </div>
      </div>
      <div class="flex justify-between items-center mt-3">
        <p class="text-lg font-brandon-bold">Filter</p>
        <button class="py-1 px-3 rounded text-orange font-brandon-bold text-lg hover:bg-orange/10">Reset</button>
      </div>
      <div class="mt-3 flex flex-col gap-y-3">
        <a href="{{ route('view-likes') }}"><button class="flex items-center w-full gap-x-4 rounded p-1 hover:bg-green-100 hover:px-2 hover:text-green-200 duration-300">
          <img src="{{ asset('images/icons_logos/water-can.svg') }}" class="w-7 h-7 text-green-200" alt="" />
          <span class="text-xl pt-1">Likes</span>
        </button></a>

        <div id="accordion-open" data-accordion="open" data-active-classes="bg-green-100 px-2 rounded text-green-200 font-brandon-bold" data-inactive-classes="text-black">
          <h2 id="plants-drop">
            <button type="button" class="flex items-center w-full gap-x-6 p-2 rounded hover:bg-green-100 hover:px-3 hover:text-green-200 duration-300" data-accordion-target="#under-plants" aria-expanded="true" aria-controls="under-plants">
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
              </svg>
              <span class="text-xl">Plants</span>
            </button>
          </h2>
          <div id="under-plants" class="hidden" aria-labelledby="plants-drop">
            <ul class="space-y-2 py-5 pl-12 pr-5">
              <li class="flex justify-between items-center">
                <label class="text-lg" for="plants-all">All</label>
                <input type="checkbox" name="plants-all" id="plants-all" class="checked:bg-green w-4 h-4 rounded-sm">
              </li>
              <li class="flex justify-between items-center">
                <label class="text-lg" for="bush">Bush</label>
                <input type="checkbox" name="bush" id="bush" class="checked:bg-green w-4 h-4 rounded-sm">
              </li>
              <li class="flex justify-between items-center">
                <label class="text-lg" for="flowering">Flowering</label>
                <input type="checkbox" name="flowering" id="flowering" class="checked:bg-green w-4 h-4 rounded-sm">
              </li>
              <li class="flex justify-between items-center">
                <label class="text-lg" for="shrub">Shrub</label>
                <input type="checkbox" name="shrub" id="shrub" class="checked:bg-green w-4 h-4 rounded-sm">
              </li>
              <li class="flex justify-between items-center">
                <label class="text-lg" for="succulent">Succulent</label>
                <input type="checkbox" name="succulent" id="succulent" class="checked:bg-green w-4 h-4 rounded-sm">
              </li>
              <li class="flex justify-between items-center">
                <label class="text-lg" for="perennial">Perennial</label>
                <input type="checkbox" name="perennial" id="perennial" class="checked:bg-green w-4 h-4 rounded-sm">
              </li>
            </ul>
          </div>
          <h2 id="essentials-drop">
            <button type="button" class="flex items-center w-full gap-x-6 p-2 rounded hover:bg-green-100 hover:px-3 hover:text-green-200 duration-300" data-accordion-target="#under-essentials" aria-expanded="false" aria-controls="under-essentials">
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
              </svg>
              <span class="text-xl">Essentials</span>
            </button>
          </h2>
          <div id="under-essentials" class="hidden" aria-labelledby="essentials-drop">
            <ul class="space-y-2 py-5 pl-12 pr-5">
              <li class="flex justify-between items-center">
                <label class="text-lg" for="ess-all">All</label>
                <input type="checkbox" name="ess-all" id="ess-all" class="checked:bg-green w-4 h-4 rounded-sm">
              </li>
              <li class="flex justify-between items-center">
                <label class="text-lg" for="soil">Soil</label>
                <input type="checkbox" name="soil" id="soil" class="checked:bg-green w-4 h-4 rounded-sm">
              </li>
              <li class="flex justify-between items-center">
                <label class="text-lg" for="pots">Pots</label>
                <input type="checkbox" name="pots" id="pots" class="checked:bg-green w-4 h-4 rounded-sm">
              </li>
              <li class="flex justify-between items-center">
                <label class="text-lg" for="watering">Watering Tools</label>
                <input type="checkbox" name="watering" id="watering" class="checked:bg-green w-4 h-4 rounded-sm">
              </li>
              <li class="flex justify-between items-center">
                <label class="text-lg" for="gardening">Gardening Tools & Accessories</label>
                <input type="checkbox" name="gardening" id="gardening" class="checked:bg-green w-4 h-4 rounded-sm">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-span-8">
      <div class="lg:ml-5 mb-3">
        <h3 class="text-4xl font-brandon-bold leading">Plants</h3>
        <h5 class="text-base text-gray-500">20 results</h5>
      </div>
      <div class="grid lg:grid-cols-4 grid-cols-1">
        @foreach ($products as $p)
        <div class="mb-5 mx-5">
            @component('layout.components.front-components.Product', ['p' => $p])
            @endcomponent
        </div>
        @endforeach
      </div>
      <div class="flex justify-center mt-10 mx-auto">
        <button class="bg-green-200 rounded-md uppercase text-center text-white leading-4 text-sm p-2 font-brandon-bold w-52">Show More</button>
      </div>
    </div>
  </div>
</section>

@endsection
<!-- @section('script')
<script src="{{ asset('js/essentialsDropdown.js') }}"></script>
<script src="{{ asset('js/plantsDropdown.js') }}"></script>

@endsection -->

<!-- <section class="products grid lg:grid-cols-10 grid-cols-1 gap-x-10 ">
  <aside class="lg:block hidden col-span-2 products__filter h-screen pr-2 w-full">
    <div class="h-full">
      <div class="md:flex flex-col w-72">
        <div class="flex justify-between items-center mt-3">
          <p class="text-lg font-brandon-bold">Filter</p>
          <button class="text-orange font-brandon-bold text-lg">Reset</button>
        </div>
        <div class="mt-3 flex flex-col gap-y-3">
          <button class="flex items-center gap-x-5">
            <i class='bx bxs-heart text-xl text-green'></i>
            <span class="text-xl">Likes</span>
          </button>
        </div>
      </div>
      <div class="mt-3 duration-500">
        <button id="plantsDropdownBtn" class="flex items-center gap-x-2">
          <i id="plantsDown" class='bx bx-chevron-right text-2xl text-green duration-500'></i>
          <span class="text-xl">Plants</span>
        </button>
        <div id="plantsDropdownMenu" class="ml-7 mt-3 hidden h-0">
          <ul class="space-y-2">
            <li class="flex justify-between items-center">
              <span class="text-md">All</span>
              <input type="checkbox" name="" id="" class="checked:bg-green w-4 h-4 rounded-sm">
            </li>
            <li class="flex justify-between items-center">
              <span class="text-md">Bush</span>
              <input type="checkbox" name="" id="" class="checked:bg-green w-4 h-4 rounded-sm">
            </li>
            <li class="flex justify-between items-center">
              <span class="text-md">Flowering</span>
              <input type="checkbox" name="" id="" class="checked:bg-green w-4 h-4 rounded-sm">
            </li>
            <li class="flex justify-between items-center">
              <span class="text-md">Shrub</span>
              <input type="checkbox" name="" id="" class="checked:bg-green w-4 h-4 rounded-sm">
            </li>
            <li class="flex justify-between items-center">
              <span class="text-md">Succulent</span>
              <input type="checkbox" name="" id="" class="checked:bg-green w-4 h-4 rounded-sm">
            </li>
            <li class="flex justify-between items-center">
              <span class="text-md">Perennial</span>
              <input type="checkbox" name="" id="" class="checked:bg-green w-4 h-4 rounded-sm">
            </li>
          </ul>
        </div>
      </div>
      <div class="mt-3">
        <button id="essentialsDropdownBtn" class="flex items-center gap-x-2">
          <i id="essentialsDown" class='bx bx-chevron-right text-2xl text-green'></i>
          <span class="text-xl">Essentials</span>
        </button>
        <div id="essentialsDropdownMenu" class="ml-7 mt-3 hidden h-0 duration-500">
          <ul class="space-y-2">
            <li class="flex justify-between items-center">
              <span class="text-md">All</span>
              <input type="checkbox" name="" id="" class="checked:bg-green w-4 h-4 rounded-sm">
            </li>
            <li class="flex justify-between items-center">
              <span class="text-md">Soil</span>
              <input type="checkbox" name="" id="" class="checked:bg-green w-4 h-4 rounded-sm">
            </li>
            <li class="flex justify-between items-center">
              <span class="text-md">Pots</span>
              <input type="checkbox" name="" id="" class="checked:bg-green w-4 h-4 rounded-sm">
            </li>
            <li class="flex justify-between items-center">
              <span class="text-md">Watering Tools</span>
              <input type="checkbox" name="" id="" class="checked:bg-green w-4 h-4 rounded-sm">
            </li>
            <li class="flex justify-between items-center">
              <span class="text-md">Gardening Tools & Accessories</span>
              <input type="checkbox" name="" id="" class="checked:bg-green w-4 h-4 rounded-sm">
            </li>
          </ul>
        </div>
      </div>
    </div>
  </aside>
  <div class="lg:col-span-8 col-span-1 lg:mx-0 mx-auto products__items">
    <div class="lg:ml-5 mb-3">
      <h3 class="text-2xl font-brandon-bold leading-7">Plants</h3>
      <h5 class="text-base text-gray">20 results</h5>
    </div>
    <div class="grid lg:grid-cols-4 grid-cols-1">
      {{-- @foreach ($prods as $p) --}}
      <div class="mb-5 mx-5">
        {{-- @component('layout.components.front-components.Product', $p)
        @endcomponent --}}
      </div>
      {{-- @endforeach --}}
    </div>
  </div>
</section>
<div class="flex justify-center mt-10 mx-auto">
  <button class="bg-green-200 rounded-md uppercase text-center text-white leading-4 text-sm p-2 font-brandon-bold w-52">SHOW
    MORE</button>
</div> -->