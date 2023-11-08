@extends('layout.client.front')
@section('title', 'Basket')
@section('content')

<section>
  <p class="text-gray-500/70">Plants / Basket</p>
  <div class="flex justify-between mb-5">
    <h3 class="text-4xl font-brandon-bold leading">Your Basket</h3>
    <div class="flex items-center space-x-8">
      <div class="text-end">
        <p class="text-gray-500 leading-4">Subtotal</p>
        <p class="font-brandon-black text-xl">₱<span>2,000</span></p>
      </div>
      <a href="{{ route('checkout') }}"><button class="rounded-md text-lg bg-green-200 p-2 mb-2 w-32 text-center text-white hover:bg-green-200/80">Checkout</button></a>
    </div>
  </div>
  <div class="card shadow-bottom bg-white">
    <div class="relative overflow-x-auto">
      <table class="w-full text-sm text-left text-gray-500">
        <thead class="">
          <tr class="font-medium">
            <th scope="col" class="w-2/5 px-6 py-3 space-x-5">
              <input type="checkbox" class="w-4 h-4 text-green-200 border-gray-500/50 rounded focus:ring-green-200 dark:focus:ring-green-200 focus:ring-2">
              <span>All Products</span>
            </th>
            <th scope="col" class="px-6 py-3 whitespace-nowrap">
              Product Price
            </th>
            <th scope="col" class="px-6 py-3 whitespace-nowrap">
              Product Quantity
            </th>
            <th scope="col" class="px-6 py-3 whitespace-nowrap">
              Total Price
            </th>
            <th scope="col" class="px-6 py-3">
              Actions
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white">
            <th scope="row" colspan="6" class="px-6 py-4 whitespace-nowrap space-x-5 bg-gray-400">
              <input type="checkbox" class="w-4 h-4 text-green-200 border-gray-500/50 rounded focus:ring-green-200 dark:focus:ring-green-200 focus:ring-2">
              <span class="">Plants</span>
            </th>
          </tr>
         @foreach($cartItems as $item)
            @php
            $product = $products->where('id', $item->id)->first(); // Find product details based on item ID
            @endphp
         <tr class="bg-white text-black border-b">
          <td class="px-6 py-4 flex items-center">
            <input type="checkbox" class="w-4 h-4 text-green-200 border-gray-500/50 rounded focus:ring-green-200 dark:focus:ring-green-200 focus:ring-2">
            @php $img = explode(',', $product->image) @endphp
            <img src="/uploads/products/{{ $img[0] }}" class="h-28 w-28 object-cover mx-5 rounded-lg" />
            <div>
              <h4 class="text-2xl font-brandon-bold">{{ $product->name }}</h4>
              <p class="text-gray-500/70 w-3/5 max-h-20 overflow-hidden line-clamp-2">{{ $product->description }}</p>
            </div>
          </td>
          <td class="px-6 py-4 font-brandon-bold text-xl">₱<span>{{ $product->price }}</span></td>
          <td class="px-6 py-4 text-xl flex space-x-5 items-center">
            <button class="h-8 w-8 bg-gray-500/20 rounded-full hover:bg-green-100"><i class='bx bx-minus mt-1.5'></i></button>
            <span>{{ $item->quantity }}</span>
            <button class="h-8 w-8 bg-gray-500/20 rounded-full hover:bg-green-100"><i class='bx bx-plus mt-1.5'></i></button>
          </td>
          <td class="px-6 py-4 font-brandon-bold text-xl">₱<span>{{ $product->price * $item->quantity }}</span></td>
          <td class="px-6 py-4 text-xl">
            <button class="h-8 w-8 bg-gray-500/20 rounded-full hover:bg-green-100"><i class='bx bx-x mt-1.5'></i></button>
          </td>
        </tr>
         @endforeach
        
        </tbody>
      </table>
    </div>
  </div>
  <div class="flex justify-between mt-10">
    <div>
      <h3 class="text-2xl font-brandon-bold leading">Subtotal</h3>
      <p>Shipping & Taxes calculated at <em>checkout</em></p>
    </div>
    <div class="flex items-center space-x-8">
      <div class="text-end">
        <p class="text-gray-500 leading-4">Subtotal</p>
        <p class="font-brandon-black text-xl">₱<span>2,000</span></p>
      </div>
      <a href="{{ route('checkout') }}"><button class="rounded-md text-lg bg-green-200 p-2 mb-2 w-32 text-center text-white hover:bg-green-200/80">Checkout</button></a>
    </div>
  </div>
</section>

@endsection