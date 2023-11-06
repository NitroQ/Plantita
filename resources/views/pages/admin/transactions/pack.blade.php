@extends('layout.client.admin')
@section('title', 'Order Packed')
@section('content')
<section>
  <div class="flex mb-5">
    <a href="{{ route('transactions') }}"><i class='bx bx-chevron-left me-3 text-5xl text-green-200'></i></a>
    <h1 class="text-4xl font-brandon-bold">Transaction #123456789</h1>
  </div>
  <div class="grid grid-cols-5 gap-8 items-start">
    <div class="col-span-5 lg:col-span-2 space-y-8">
      <div class="shadow-leftBottom p-5 rounded-md">
        <div class="flex justify-between mb-3">
          <h3 class="text-2xl font-brandon-bold">Transaction Details</h3>
          <span class="text-sm bg-orange/20 text-orange uppercase font-brandon-black px-3 py-2 rounded">Pending</span>
        </div>
        <div class="grid grid-cols-5 gap-y-3 gap-x-5 items-start text-lg">
          <div class="col-span-2 text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">Transaction Number</div>
          <p class="col-span-3 mt-1">#123456789</p>
          <div class="col-span-2 text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">Transaction Date</div>
          <p class="col-span-3 mt-1">October 13, 2023</p>
          <div class="col-span-2 text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">Shipping Method</div>
          <p class="col-span-3 mt-1">Personal Delivery</p>
          <div class="col-span-2 text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">Shipping Details</div>
          <span class="col-span-3 mt-1">
            <p>Frank Vincent Gesmundo</p>
            <p>09423894723</p>
            <p>96 Kaliraya St. Cluster 19 G. Araneta Ave. Brgy. Tatalon, Quezon City, 1113</p>
          </span>
          <div class="col-span-2 text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">Payment Method</div>
          <span class="col-span-3 mt-1">
            <p>Maya Debit / Credit</p>
            <p>#1273459049084</p>
          </span>
        </div>
      </div>
      <div class="space-y-3">
        <label for="care-level" class="text-xl font-brandon-bold block">Enter Shipment Details</label>
        <input id="shipment" type="text" class="block w-full col-span-2 rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" placeholder="Choose Courier">
        <input id="shipment" type="text" class="block w-full col-span-2 rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" placeholder="Courier Location">
        <input id="shipment" type="number" class="block w-full col-span-2 rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" placeholder="Tracking/Reference No.">
        <div class="grid grid-cols-3 space-x-3 pt-3">
          <button class="bg-crimson text-white text-lg py-2 rounded hover:bg-crimson/80"><i class='bx bx-x-circle me-3'></i>Cancel Order</button>
          <button class="bg-blue-100 text-white text-lg py-2 rounded hover:bg-blue-100/80"><i class='bx bx-printer me-3'></i>Print Waybill</button>
          <button class="bg-green-200 text-white text-lg py-2 rounded hover:bg-green-200/80"><a href="{{ route('shipped') }}"><i class='bx bxs-truck me-3'></i>Ship Item</a></button>
        </div>
      </div>
    </div>
    <div class="col-span-5 lg:col-span-3 order-first lg:order-last">
      <div class="p-10 rounded-lg bg-gray-400">
        <div class="grid grid-cols-5 items-center gap-y-5">
          <img src="{{ asset('images/products/plant-sample.webp') }}" class="pe-10 rounded-lg" />
          <div class="col-span-3">
            <p class="font-brandon-bold text-xl">African Mask</p>
            <p>Quantity: 2</p>
          </div>
          <p class="text-xl text-end">₱1,000</p>
          <img src="{{ asset('images/products/plant-sample.webp') }}" class="pe-10 rounded-lg" />
          <div class="col-span-3">
            <p class="font-brandon-bold text-xl">African Mask</p>
            <p>Quantity: 2</p>
          </div>
          <p class="text-xl text-end">₱1,000</p>
          <div class="col-span-5 grid grid-cols-2 text-lg">
            <p>Subtotal</p>
            <p class="font-brandon-bold text-end">₱2,000</p>
            <p>Shipping</p>
            <p class="font-brandon-bold text-end">₱250</p>
          </div>
          <div class="flex justify-between col-span-5 text-xl">
            <p class="font-brandon-bold">Total</p>
            <p class="font-brandon-bold">₱2,250</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection