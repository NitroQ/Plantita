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
        <a href="{{ route('view-likes') }}"><button class="flex items-center w-full gap-x-4 rounded p-1 hover:bg-green-100 hover:px-2 hover:text-green-200 hover:font-brandon-bold duration-300">
            <img src="{{ asset('images/icons_logos/green-watercan-icon.svg') }}" class="w-7 h-7 text-green-200" alt="" />
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
          <form action="{{ route('product') }}" method="GET" id="searchForm">
            <div id="under-plants" class="hidden" aria-labelledby="plants-drop">
              <ul class="space-y-2 py-5 pl-12 pr-5">
                <li class="flex justify-between items-center">
                  {{-- <label class="text-lg" for="plants-all">All</label>
                  <input type="checkbox" name="filters[]" value="All" id="plants-all" class="checked:bg-green w-4 h-4 rounded-sm"> --}}
                  <label class="text-lg" for="plants-all">All</label>
                  <input type="checkbox" name="categories[]" value="Plant" data-accordion-id="under-plants" id="plants-all" class="w-4 h-4 text-green-200 bg-white border-gray-300 rounded focus:ring-green-200" {{ in_array('Plant', $categories) ? 'checked' : '' }}>
                </li>
                <li class="flex justify-between items-center">
                  <label class="text-lg" for="bush">Bush</label>
                  <input type="checkbox" name="types[]" value="Bush" data-accordion-id="under-plants" id="bush" class="w-4 h-4 text-green-200 bg-white border-gray-300 rounded focus:ring-green-200" {{ in_array('Bush', $types) ? 'checked' : '' }}>
                </li>
                <li class="flex justify-between items-center">
                  <label class="text-lg" for="flowering">Flowering</label>
                  <input type="checkbox" name="types[]" value="Flowering" data-accordion-id="under-plants" id="flowering" class="w-4 h-4 text-green-200 bg-white border-gray-300 rounded focus:ring-green-200" {{ in_array('Flowering', $types) ? 'checked' : '' }}>
                </li>
                <li class="flex justify-between items-center">
                  <label class="text-lg" for="shrub">Shrub</label>
                  <input type="checkbox" name="types[]" value="Shrub" data-accordion-id="under-plants" id="shrub" class="w-4 h-4 text-green-200 bg-white border-gray-300 rounded focus:ring-green-200" {{ in_array('Shrub', $types) ? 'checked' : '' }}>
                </li>
                <li class="flex justify-between items-center">
                  <label class="text-lg" for="succulent">Succulent</label>
                  <input type="checkbox" name="types[]" value="Succulent" data-accordion-id="under-plants" id="succulent" class="w-4 h-4 text-green-200 bg-white border-gray-300 rounded focus:ring-green-200" {{ in_array('Succulent', $types) ? 'checked' : '' }}>
                </li>
                <li class="flex justify-between items-center">
                  <label class="text-lg" for="perennial">Perennial</label>
                  <input type="checkbox" name="types[]" value="Perennial" data-accordion-id="under-plants" id="perennial" class="w-4 h-4 text-green-200 bg-white border-gray-300 rounded focus:ring-green-200" {{ in_array('Perennial', $types) ? 'checked' : '' }}>
                </li>
              </ul>
            </div>
            <h2 id="essentials-drop">
              <button type="button" class="flex items-center w-full gap-x-6 p-2 rounded hover:bg-green-100 hover:px-3 hover:text-green-200 duration-300" data-accordion-target="#under-essentials" aria-expanded="true" aria-controls="under-essentials">
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
                <span class="text-xl">Essentials</span>
              </button>
            </h2>
            <div id="under-essentials" class="hidden" aria-labelledby="essentials-drop">
              <ul class="space-y-2 py-5 pl-12 pr-5">
                <li class="flex justify-between items-center">
                  {{-- <label class="text-lg" for="ess-all">All</label>
                  <input type="checkbox" name="ess-all" id="ess-all" class="checked:bg-green w-4 h-4 rounded-sm"> --}}
                  <label class="text-lg" for="ess-all">All</label>
                  <input type="checkbox" name="categories[]" value="Essential" data-accordion-id="under-essentials" id="ess-all" class="w-4 h-4 text-green-200 bg-white border-gray-300 rounded focus:ring-green-200" {{ in_array('Essential', $categories) ? 'checked' : '' }}>
                </li>
                <li class="flex justify-between items-center">
                  <label class="text-lg" for="soil">Soil</label>
                  <input type="checkbox" name="types[]" value="Soil" data-accordion-id="under-essentials" id="soil" class="w-4 h-4 text-green-200 bg-white border-gray-300 rounded focus:ring-green-200" {{ in_array('Soil', $types) ? 'checked' : '' }}>
                </li>
                <li class="flex justify-between items-center">
                  <label class="text-lg" for="pots">Pots</label>
                  <input type="checkbox" name="types[]" value="Pots" data-accordion-id="under-essentials" id="pots" class="w-4 h-4 text-green-200 bg-white border-gray-300 rounded focus:ring-green-200" {{ in_array('Pots', $types) ? 'checked' : '' }}>
                </li>
                <li class="flex justify-between items-center">
                  <label class="text-lg" for="watering">Watering</label>
                  <input type="checkbox" name="types[]" value="Watering" data-accordion-id="under-essentials" id="watering" class="w-4 h-4 text-green-200 bg-white border-gray-300 rounded focus:ring-green-200" {{ in_array('Watering', $types) ? 'checked' : '' }}>
                </li>
                <li class="flex justify-between items-center">
                  <label class="text-lg" for="gardening">Gardening</label>
                  <input type="checkbox" name="types[]" value="Gardening" data-accordion-id="under-essentials" id="gardening" class="w-4 h-4 text-green-200 bg-white border-gray-300 rounded focus:ring-green-200" {{ in_array('Gardening', $types) ? 'checked' : '' }}>
                </li>
              </ul>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-span-8">
      <div class="lg:ml-5 mb-3">
        {{-- <h3 id="filterInfo" class="text-4xl font-brandon-bold leading">Plants</h3> --}}
        <h3 class="text-4xl font-brandon-bold leading">{{ count($products) }} results</h3>
      </div>
      <div class="grid lg:grid-cols-4 grid-cols-1">
        @foreach ($products as $p)
        <div class="mb-5 mx-5">
          @component('layout.components.front-components.Product', ['p' => $p])
          @endcomponent
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

@section('script')
<script>
  document.addEventListener("DOMContentLoaded", function(event) {
    var typeCheckboxes = document.querySelectorAll('input[name="types[]"]');

    typeCheckboxes.forEach(function(checkbox) {
      checkbox.addEventListener('change', function() {
        var form = document.getElementById('searchForm');
        form.submit();
      });
    });

    var categoryCheckboxes = document.querySelectorAll('input[name="categories[]"]');

    categoryCheckboxes.forEach(function(checkbox) {
      checkbox.addEventListener('change', function() {
        var form = document.getElementById('searchForm');
        form.submit();
      });
    });
  });
</script>
@endsection

@endsection