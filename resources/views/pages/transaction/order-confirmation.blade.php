@extends('layout.client.front')
@section('title', 'Order Confirmation')
@section('content')
<div class="grid xl:grid-cols-6 grid-cols-1 h-full w-full py-0">
  <div class="col-span-1 hidden xl:block relative">
    <img class="w-full h-full object-cover max-w-3/4 mx-auto" src="{{ asset('images/other/order-side-bg.webp') }}" alt="watering can and plant">
  </div>
  <div class="col-span-5 p-6 flex items-center justify-center mt-40">
    <div class="pb-10">
      <div class="pb-4">
        <img class="h-10 w-10" src="{{ asset('images/icons_logos/order-icon.svg') }}" alt="">
        <h2 class="font-brandon-black text-5xl italic py-4">Thank you so much!</h2>
        <p class="font-brandon-reguar text-gray-500 text-xl">Your order means a lot to us! Patienly wait for processing of your item.</p>
      </div>
      <div class="grid grid-cols-2 gap-10">
        <div class="py-4">
          <div class="grid grid-cols-1 shadow-cardShadow border border-white rounded-xl bg-white">
            <div class="py-6 px-6">
              <h4 class="font-brandon-black text-3xl ">Products Ordered</h4>
            </div>
            @php $i= 0; @endphp
          @foreach($products as $p)
          @php $img = explode(', ', $p->image) @endphp
          <div class="grid grid-rows-1 py-2 border-b-2 border-lightGray ">
            <div class="grid grid-cols-6 items-center justify-center p-4 px-6">
              <div class="col-span-1 flex justify-center items-center">
                <img class="h-20 w-20" src="/uploads/products/{{ $img[0] }}" alt="">
              </div>
              <div class=" col-span-4 pr-6">
                <div class="grid grid-rows-1">
                  <h4 class="font-brandon-black text-2xl">African Mask</h4>
                  <h4 class="font-brandon-regular text-lg text-gray-500 ">{{ mb_strimwidth($p->description, 0, 10, "..."); }}</h4>
                  <h4 class="font-brandon-black text-xl">Quantity: {{ $quantity[$i] }}</h4>
                </div>
              </div>
              <div class="col-span-1 flex justify-end">
                <div class="grid grid-rows-1">
                  <h4 class="font-brandon-black text-2xl text-green-200 font-bold">₱{{ $p->price * $quantity[$i] }}</h4>
                </div>
              </div>
            </div>
          </div>
          @endforeach
            {{-- DELIVERY FEE--}}
            <div class="grid grid-rows-1  border-b-2 border-lightGray ">
              <div class="grid grid-cols-6 p-4 px-6">
                <div class="col-span-5 flex justify-end px-2">
                  <h4 class="font-brandon-regular text-2xl text-gray-500">Delivery Fee:</h4>
                </div>
                <div class="col-span-1 flex justify-end">
                  <h4 class="font-brandon-black text-2xl font-bold">₱{{ $transaction->shipping_cost }}</h4>
                </div>
              </div>
            </div>
            {{-- TOTAL --}}
            <div class="grid grid-rows-1">
              <div class="grid grid-cols-6 p-4 px-6">
                <div class="col-span-5 ">
                  <h4 class="font-brandon-regular text-2xl text-gray-500">Total</h4>
                </div>
                <div class="col-span-1 flex justify-end items-center">
                  <h4 class="font-brandon-black text-2xl text-green-200 font-bold">₱{{ $transaction->total }}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- TRANSACTION DETAILS --}}
        <div class="py-4">
          <div class="grid grid-cols-1 shadow-cardShadow border border-white rounded-xl bg-white p-4 px-6">
            <div class="py-2">
              <h4 class="font-brandon-black text-3xl">Transaction Details</h4>
            </div>

            <div class="grid grid-rows-1 py-2 justify-start">
              <div class="grid grid-cols-6 items-center justify-start gap-2">
                <div class=" col-span-3 flex justify-end">
                  <div class="border border-white rounded-md bg-culture flex items-center justify-center w-48">
                    <h4 class="font-brandon-black text-lg px-4 py-1 ">Transaction Number</h4>
                  </div>
                </div>
                <div class="col-span-3 flex justify-start items-center">
                  <h4 class="font-brandon-regular text-lg text-gray-500">#{{ $transaction->id }}</h4>
                </div>
              </div>
            </div>

            <div class="grid grid-rows-1 py-2 justify-start">
              <div class="grid grid-cols-6 items-center justify-start gap-2">
                <div class=" col-span-3 flex justify-start">
                  <div class="border border-white rounded-md bg-culture flex items-center justify-center w-48">
                    <h4 class="font-brandon-black text-lg px-6 py-1">Transaction Date</h4>
                  </div>
                </div>
                <div class="col-span-3 flex justify-start items-center">
                  <h4 class="font-brandon-regular text-lg text-gray-500">{{ $transaction->created_at->format('M d, Y')  }}</h4>
                </div>
              </div>
            </div>

            <div class="grid grid-rows-1 py-2 justify-start">
              <div class="grid grid-cols-6 items-center justify-start gap-2">
                <div class=" col-span-3 flex justify-start">
                  <div class="border border-white rounded-md bg-culture flex items-center justify-center w-48">
                    <h4 class="font-brandon-black text-lg px-4 py-1">Shipping Method</h4>
                  </div>
                </div>
                <div class="col-span-3 flex justify-start items-center">
                  <h4 class="font-brandon-regular text-lg text-gray-500">{{ $transaction->ship_method }}</h4>
                </div>
              </div>
            </div>

            <div class="grid grid-rows-1 py-2 justify-start ">
              <div class="grid grid-cols-6 justify-start gap-2">
                <div class="col-span-3 flex justify-start">
                  <div class="border border-white rounded-md bg-culture flex items-center justify-center w-48 h-10">
                    <h4 class="font-brandon-black text-lg px-4 py-1 ">Shipping Details</h4>
                  </div>
                </div>
                <div class="col-span-3">
                  <h4 class="font-brandon-regular text-lg text-gray-500">{{ $transaction->name }}</h4>
                  <h4 class="font-brandon-regular text-lg text-gray-500">{{ $transaction->phone }}</h4>
                  <h4 class="font-brandon-regular text-lg text-gray-500 w-48 pr-6">{{ $transaction->company }} {{ $transaction->street_address }} {{ $transaction->building_address }} {{ $transaction->city }} {{ $transaction->zip_code }}</h4>
                </div>
              </div>


              <div class="grid grid-rows-1 py-2 justify-start ">
                <div class="grid grid-cols-6 justify-start gap-2">
                  <div class="col-span-3 flex justify-start">
                    <div class="border border-white rounded-md bg-culture flex items-center justify-center w-48 h-10">
                      <h4 class="font-brandon-black text-lg px-4 py-1 ">Payment Method</h4>
                    </div>
                  </div>
                  <div class="col-span-3">
                    <h4 class="font-brandon-regular text-lg text-gray-500">{{ $transaction->pay_method }}</h4>
                    <h4 class="font-brandon-regular text-lg text-gray-500">{{ $transaction->payment_transaction_id }}</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid grid-cols-2 items-center gap-5 mt-5">
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

@endsection