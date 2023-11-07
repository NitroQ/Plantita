@extends('layout.client.front')
@section('title', 'Product Failed')
@section('content')
<div class="grid xl:grid-cols-6 grid-cols-1 h-full w-full py-0">
  <div class="col-span-1 hidden xl:block relative">
    <img class="w-full h-full object-cover max-w-3/4 mx-auto" src="{{ asset('images/other/order-side-bg.webp') }}" alt="watering can and plant">
  </div>
  <div class="col-span-5 p-6 flex items-center justify-start">
    <div class="grid grid-cols-1 px-6 py-4">
      <img class="w-50 h-50 object-cover py-6 max-w-3/4 mx-0 mr-4" src="{{ asset('images/error/product-failed-vector.webp') }}" alt="watering can and plant">
      <h2 class="font-brandon-black text-green-200 text-5xl pt-6 py-4">Sorry, Purchase Failed!</h2>
      <p class="text-gray-500 text-xl pb-2">Your payment didn’t went through. Please try to repeat the process at checkout.</p>
      <div class="grid grid-cols-6">
       <div class="col-span-6 py-2">
        <a href="#"
          class="flex-none text-md inline-block rounded-md bg-green px-4 py-2 font-brandon-bold w-32 text-center text-white">Back To Cart</a>
       </div>
      </div>
    </div>
  </div>
</div>

@endsection

