@extends('layout.client.front')
@section('title', 'Product Cancelled')
@section('content')
<div class="grid xl:grid-cols-6 grid-cols-1 h-full w-full py-0">
  <div class="col-span-1 hidden xl:block relative">
    <img class="w-full h-full object-cover max-w-3/4 mx-auto" src="{{ asset('images/other/order-side-bg.webp') }}" alt="watering can and plant">
  </div>
  <div class="col-span-5 p-6 flex items-center justify-start mt-32">
    <div class="grid grid-cols-1 px-6 py-4">
      <img class="w-50 h-50 object-cover py-6 max-w-3/4 mx-0 mr-4" src="{{ asset('images/error/error-404.webp') }}" alt="watering can and plant">
      <h2 class="font-brandon-black text-green-200 text-5xl pt-6 py-4">Oh no, Server Crashed!</h2>
      <p class="text-gray-500 text-xl pb-2">Something went wrong, its our fault.</p>
      <div class="grid grid-cols-6">
        <div class="col-span-6 py-2">
          <div class="col-span-6 pt-5">
            <a href="{{ route('index') }}"><button class="rounded-md text-lg bg-green-200 p-2 mb-2 w-36 font-brandon-bold text-center text-white hover:bg-green-200/80">Back to Home</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection