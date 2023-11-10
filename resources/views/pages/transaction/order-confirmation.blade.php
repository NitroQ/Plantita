@extends('layout.client.front')
@section('title', 'Order Confirmation')
@section('content')
<div class="grid xl:grid-cols-6 grid-cols-1 h-full w-full py-0">
  <div class="col-span-1 hidden xl:block relative">
    <img class="w-full h-full object-cover max-w-3/4 mx-auto" src="{{ asset('images/other/order-side-bg.webp') }}" alt="watering can and plant">
  </div>
  <div class="col-span-5 py-10 px-20 flex items-center justify-center mt-40">
    <div class="pb-10">
      <div class="pb-4">
        <img class="h-10 w-10" src="{{ asset('images/icons_logos/order-icon.svg') }}" alt="">
        <h2 class="font-brandon-black text-5xl italic py-4">Thank you so much!</h2>
        <p class="font-brandon-reguar text-gray-500 text-xl">Your order means a lot to us! Patienly wait for processing of your item.</p>
      </div>
      <div class="grid grid-cols-9 gap-8 pt-3">
        <div class="col-span-5">
          <div class="shadow-leftBottom bg-white rounded-lg space-y-3">
            <h3 class="px-5 pt-5 text-2xl font-brandon-bold mb-3">Products Ordered</h3>
            @php $i= 0; @endphp
            @foreach($products as $p)
            @php $img = explode(', ', $p->image) @endphp
            <div class="border-b-2 border-lightGray">
              <div class="grid grid-cols-6 items-center justify-center gap-5 px-5 py-4">
                <div class="flex justify-center items-center">
                  <img class="h-28 w-28 object-cover rounded" src="/uploads/products/{{ $img[0] }}" alt="">
                </div>
                <div class="col-span-4">
                  <div class="space-y-1">
                    <h4 class="text-xl font-brandon-black">African Mask</h4>
                    <h4 class="text-sm text-gray-500/70 w-3/5 max-h-20 overflow-hidden line-clamp-2">{{ $p->description }}</h4>
                    <h4 class="text-lg">Quantity: {{ $quantity[$i] }}</h4>
                  </div>
                </div>
                <div class="flex justify-end">
                  <h4 class="font-brandon-black text-2xl text-green-200 font-bold">₱{{ $p->price * $quantity[$i] }}</h4>
                </div>
              </div>
            </div>
            @endforeach
            {{-- DELIVERY FEE--}}
            <div class="border-b-2 border-lightGray">
              <div class="grid grid-cols-6 pt-1 p-4 px-5 items-center">
                <div class="col-span-5 flex justify-end">
                  <h4 class="font-brandon-regular text-xl text-gray-500">Delivery Fee:</h4>
                </div>
                <div class="col-span-1 flex justify-end">
                  <h4 class="font-brandon-black text-xl font-bold">₱{{ $transaction->shipping_cost }}</h4>
                </div>
              </div>
            </div>
            {{-- TOTAL --}}
            <div class="">
              <div class="grid grid-cols-6 pt-1 p-4 px-5">
                <div class="col-span-5 ">
                  <h4 class="font-brandon-regular text-xl text-gray-500">Total</h4>
                </div>
                <div class="col-span-1 flex justify-end items-center">
                  <h4 class="font-brandon-black text-xl text-green-200 font-bold">₱{{ $transaction->total }}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- TRANSACTION DETAILS --}}
        <div class="col-span-4">
          <div class="shadow-leftBottom bg-white rounded-lg p-5 space-y-3">
            <h3 class="text-2xl font-brandon-bold">Transaction Details</h3>
            <div class="grid grid-cols-5 gap-y-3 gap-x-5 items-start text-lg">
              <div class="col-span-2 text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">Transaction Number</div>
              <p class="col-span-3 mt-1">#{{ $transaction->id }}</p>
              <div class="col-span-2 text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">Transaction Date</div>
              <p class="col-span-3 mt-1">{{ $transaction->created_at->format('M d, Y')  }}</p>
              <div class="col-span-2 text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">Shipping Method</div>
              <p class="col-span-3 mt-1 capitalize">{{ $transaction->ship_method }}</p>
              <div class="col-span-2 text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">Shipping Details</div>
              <span class="col-span-3 mt-1 capitalize">
                <p>{{ $transaction->name }}</p>
                <p>{{ $transaction->phone }}</p>
                <p>{{ $transaction->company }} {{ $transaction->street_address }} {{ $transaction->building_address }} {{ $transaction->city }} {{ $transaction->zip_code }}</p>
              </span>
              <div class="col-span-2 text-center font-brandon-bold py-1 bg-gray-400 rounded-lg capitalize">Payment Method</div>
              <span class="col-span-3 mt-1 capitalize">
                <p>{{ $transaction->pay_method }}</p>
                <p>{{ $transaction->payment_transaction_id }}</p>
              </span>
            </div>
          </div>
          <div class="grid grid-cols-2 items-center gap-5 mt-8">
            <div class="">
              <a href="{{ route('transaction') }}">
                <button class="rounded-md text-lg bg-green-200 p-2 w-full font-brandon-bold text-center text-white hover:bg-green-200/80">Check Transactions</button>
              </a>
            </div>
            <div class="">
              <a href="{{ route('index') }}">
                <button class="rounded-md text-lg border border-green-200 p-2 w-full font-brandon-bold text-center text-green-200 hover:bg-green-100">Back To Home</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection