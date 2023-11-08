@extends('layout.client.front')
@section('title', 'View Products')
@section('content')
<section class="">
  <div class="grid grid-cols-12 gap-x-5">
    <div class="col-span-6 flex flex-wrap view-products__images">
      <div class="flex items-center gap-x-5">
        <div class="flex flex-col flex-wrap gap-y-3 max-w-[25%]">
          <img class="w-full aspect-[4/3] h-[130px]" src="{{ asset('images/home/product-1.webp') }}" alt="">
          <img class="w-full aspect-[4/3] h-[130px]" src="{{ asset('images/home/product-1.webp') }}" alt="">
          <img class="w-full aspect-[4/3] h-[130px]" src="{{ asset('images/home/product-1.webp') }}" alt="">
          <img class="w-full aspect-[4/3] h-[130px]" src="{{ asset('images/home/product-1.webp') }}" alt="">
        </div>
        <div class="max-w-xl">
          <img width="575px" height="auto" class="object-cover" src="{{ asset('images/products/plant-sample.webp') }}" alt="">
        </div>
      </div>
    </div>
    <div class="col-span-6 flex flex-col view-products__info gap-y-3">

      <h2 class="font-brandon-black italic leading-10 text-5xl">African Mask</h2>
      <h4 class="text-3xl text-green-200 leading-9 font-brandon-bold">₱500</h4>
      <p class="text-xl">
        <span class="font-brandon-bold">Scientific Name:</span>
        <span class="font-brandon-regular italic">Alocasia Polly</span>
      </p>
      <p class="text-xl">
        <span class="font-brandon-bold">Plant Life Span:</span>
        <span class="font-brandon-regular italic">Approximately 5 years</span>
      </p>
      <p class="text-xl leading-7">
        The African Mask plant, with its striking arrowhead-shaped leaves, adds a touch of exotic elegance
        to any space. Known for its unique pattern resembling an African tribal mask, this plant is a
        stunning choice for plant enthusiasts and interior decor enthusiasts alike.
      </p>
      <div class="h-full relative">
        <div class="absolute top-1/2 bottom-0">
          <div class="flex items-center w-auto gap-5 mb-5">
            <button class="w-12 h-12 items-center flex justify-center rounded-full bg-white shadow-bottom">
              <i class='bx bx-minus text-green-200 text-4xl'></i>
            </button>
            <span class="text-3xl">1</span>
            <button class="w-12 h-12 items-center flex justify-center rounded-full bg-white shadow-bottom">
              <i class='bx bx-plus text-green-200 text-4xl'></i>
            </button>
          </div>
          <button class="bg-green-200 py-1 w-full text-white font-brandon-black rounded-md text-xl mt-5">Add
            to
            Basket</button>
        </div>
      </div>
    </div>
  </div>
  <div class="view-product__plant-care my-16">
    <h2 class="text-4xl font-brandon-black italic">Plant Care Information</h2>
    <div class="grid grid-cols-3 gap-x-4 mt-5">
      <div class="col-span-1">
        <div class="bg-white p-3 rounded-md space-y-3 shadow-bottom">
          <div class="flex justify-between items-center">
            <p class="text-2xl text-green-200">
              <span class="font-brandon-black italic">Care Level:</span>
              <span class="font-brandon-regular">Medium</span>
            </p>
            <i class='bx bxs-leaf text-green-200 text-4xl'></i>
          </div>
          <p class="text-lg leading-7">
            The African Mask plant falls into the category of medium care. While it's not the most demanding
            plant, it does require a bit of attention to thrive. It's not the best choice for beginners, but
            with some experience and care, you can successfully grow and maintain this striking plant.
          </p>
        </div>
      </div>
      <div class="col-span-1">
        <div class="bg-white p-3 rounded-md space-y-3 shadow-bottom">
          <div class="flex justify-between items-center">
            <p class="text-2xl text-slate-800">
              <span class="font-brandon-black italic">Watering:</span>
              <span class="font-brandon-regular">Medium</span>
            </p>
            <i class='bx bxs-droplet text-slate-800 text-4xl'></i>
          </div>
          <p class="text-lg leading-7">
            When it comes to watering, the African Mask plant prefers consistently moist soil but not
            waterlogged. It falls into the medium watering category. You should water it when the top inch
            or so of the soil feels dry to the touch. Overwatering can lead to root rot, so it's important
            to strike the right balance.s
          </p>
        </div>
      </div>
      <div class="col-span-1">
        <div class="bg-white p-3 rounded-md space-y-3 shadow-bottom">
          <div class="flex justify-between items-center">
            <p class="text-2xl text-yellow-600">
              <span class="font-brandon-black italic">Sunlight:</span>
              <span class="font-brandon-regular">Medium</span>
            </p>
            <i class='bx bxs-sun text-yellow-600 text-4xl'></i>
          </div>
          <p class="text-lg leading-7">
            African Mask plants thrive in medium to bright indirect light. They do not appreciate harsh,
            direct sunlight, which can scorch their leaves. Place them near a window with filtered sunlight
            or in a spot with bright, indirect light. Providing the right amount of light is crucial for the
            health and growth of this plant.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="view-products__extra my-5">
    <h1 class="text-3xl italic">You may also like...</h1>
    <div class="flex items-center gap-x-4 justify-center my-5">

      @component('layout.components.front-components.Product', [
      'image' => asset('images/home/product-1.webp'),
      'productName' => 'African Masc',
      'productPrice' => '500',
      'content' => 'A tropical plant with striking foliage that resembles an...',
      ])
      @endcomponent
      @component('layout.components.front-components.Product', [
      'image' => asset('images/home/product-1.webp'),
      'productName' => 'African Masc',
      'productPrice' => '500',
      'content' => 'A tropical plant with striking foliage that resembles an...',
      ])
      @endcomponent
      @component('layout.components.front-components.Product', [
      'image' => asset('images/home/product-1.webp'),
      'productName' => 'African Masc',
      'productPrice' => '500',
      'content' => 'A tropical plant with striking foliage that resembles an...',
      ])
      @endcomponent
      @component('layout.components.front-components.Product', [
      'image' => asset('images/home/product-1.webp'),
      'productName' => 'African Masc',
      'productPrice' => '500',
      'content' => 'A tropical plant with striking foliage that resembles an...',
      ])
      @endcomponent
      @component('layout.components.front-components.Product', [
      'image' => asset('images/home/product-1.webp'),
      'productName' => 'African Masc',
      'productPrice' => '500',
      'content' => 'A tropical plant with striking foliage that resembles an...',
      ])
      @endcomponent
    </div>
  </div>
</section>
@endsection