@extends('layout.client.front')
@section('title', 'Order Confirmation')
@section('content')
<div class="grid xl:grid-cols-6 grid-cols-1 h-full w-full py-0">
  <div class="col-span-1 hidden xl:block relative">
    <img class="w-full h-full object-cover max-w-3/4 mx-auto" src="{{ asset('images/other/order-side-bg.webp') }}" alt="watering can and plant">
  </div>
  <div class="col-span-5 p-6 flex items-center justify-center">
    <div class="grid grid-cols-1 px-6">
      <div class="grid grid-rows-1 pb-4">
        <img class="h-10 w-10" src="{{ asset('images/icons_logos/order-icon.svg') }}" alt="">
        <h2 class="font-brandon-black text-5xl italic py-4">Thank you so much!</h2>
        <p class="font-brandon-reguar text-gray text-xl">Your order means a lot to us! Patienly wait for processing of your item.</p>
      </div>
      <div class="grid grid-rows-1 ">
        <div class="grid xl:grid-cols-6 grid-cols-1 gap-4">
          {{-- PRODUCTS ORDERED --}}
          <div class="col-span-3 py-4 ">
            <div class="grid grid-cols-1 shadow-cardShadow border border-white rounded-xl bg-white">
              <div class="py-6 px-6">
                <h4 class="font-brandon-black text-3xl ">Products Ordered</h4>
              </div>
              {{-- PRODUCT ROW 1--}}
              <div class="grid grid-rows-1 py-2 border-b-2 border-lightGray ">
                <div class="grid grid-cols-6 items-center justify-center p-4 px-6">
                  <div class="col-span-1 flex justify-center items-center">
                    <img class="h-20 w-20" src="{{ asset('images/home/product-1.webp') }}" alt="">
                  </div>
                  <div class=" col-span-4 pr-6">
                    <div class="grid grid-rows-1">
                      <h4 class="font-brandon-black text-2xl">African Mask</h4>
                      <h4 class="font-brandon-regular text-lg text-gray ">A tropical plant with striking foliage that resembles an...</h4>
                      <h4 class="font-brandon-black text-xl">Quantity: 4</h4>
                    </div>
                  </div>
                  <div class="col-span-1 flex justify-end">
                    <div class="grid grid-rows-1">
                      <h4 class="font-brandon-black text-2xl text-green font-bold">₱2000</h4>
                    </div>
                  </div>
                </div>
              </div>
              {{-- PRODUCT ROW 2--}}
              <div class="grid grid-rows-1 py-2 border-b-2 border-lightGray ">
                <div class="grid grid-cols-6 items-center justify-center p-4 px-6">
                  <div class="col-span-1 flex justify-center items-center">
                    <img class="h-20 w-20" src="{{ asset('images/home/product-1.webp') }}" alt="">
                  </div>
                  <div class=" col-span-4 pr-6">
                    <div class="grid grid-rows-1">
                      <h4 class="font-brandon-black text-2xl">African Mask</h4>
                      <h4 class="font-brandon-regular text-lg text-gray ">A tropical plant with striking foliage that resembles an...</h4>
                      <h4 class="font-brandon-black text-xl">Quantity: 4</h4>
                    </div>
                  </div>
                  <div class="col-span-1 flex justify-end">
                    <div class="grid grid-rows-1">
                      <h4 class="font-brandon-black text-2xl text-green font-bold">₱2000</h4>
                    </div>
                  </div>
                </div>
              </div>
            {{-- PRODUCT ROW 3--}}
            <div class="grid grid-rows-1 py-2 border-b-2 border-lightGray ">
              <div class="grid grid-cols-6 items-center justify-center p-4 px-6">
                <div class="col-span-1 flex justify-center items-center ">
                  <img class="h-20 w-20" src="{{ asset('images/home/product-1.webp') }}" alt="">
                </div>
                <div class=" col-span-4 pr-6">
                  <div class="grid grid-rows-1">
                    <h4 class="font-brandon-black text-2xl">African Mask</h4>
                    <h4 class="font-brandon-regular text-lg text-gray ">A tropical plant with striking foliage that resembles an...</h4>
                    <h4 class="font-brandon-black text-xl">Quantity: 4</h4>
                  </div>
                </div>
                <div class="col-span-1 flex justify-end">
                  <div class="grid grid-rows-1">
                    <h4 class="font-brandon-black text-2xl text-green font-bold">₱2000</h4>
                  </div>
                </div>
              </div>
            </div>
            {{-- DELIVERY FEE--}}
            <div class="grid grid-rows-1  border-b-2 border-lightGray ">
              <div class="grid grid-cols-6 p-4 px-6">
                <div class="col-span-5 flex justify-end px-2">
                  <h4 class="font-brandon-regular text-2xl text-gray">Delivery Fee:</h4>
                </div>
                <div class="col-span-1 flex justify-end">
                  <h4 class="font-brandon-black text-2xl font-bold">₱250</h4>
                </div>
              </div>
            </div>
            {{-- TOTAL --}}
            <div class="grid grid-rows-1">
              <div class="grid grid-cols-6 p-4 px-6">
                <div class="col-span-5 ">
                    <h4 class="font-brandon-regular text-2xl text-gray">Total</h4>
                </div>
                <div class="col-span-1 flex justify-end items-center">
                    <h4 class="font-brandon-black text-2xl text-green font-bold">₱6,250</h4>
                </div>
              </div>
            </div>
            </div>
          </div>
          {{-- TRANSACTION DETAILS --}}
          <div class="col-span-3 py-4">
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
                    <h4 class="font-brandon-regular text-lg text-gray">#123456789</h4>
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
                    <h4 class="font-brandon-regular text-lg text-gray">October 16, 2023</h4>
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
                    <h4 class="font-brandon-regular text-lg text-gray">Personal Delivery</h4>
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
                      <h4 class="font-brandon-regular text-lg text-gray">Frank Vincent Gesmundo</h4>
                      <h4 class="font-brandon-regular text-lg text-gray">09236541256</h4>
                      <h4 class="font-brandon-regular text-lg text-gray w-48 pr-6">96 Kaliraya St. Cluster 19 G. Araneta Ave. Brgy. Tatalon, Quezon City, 1113</h4>
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
                      <h4 class="font-brandon-regular text-lg text-gray">Maya Debit / Credit</h4>
                      <h4 class="font-brandon-regular text-lg text-gray">#1273459049084</h4>
                    </div>
                </div>
              </div>
           </div>

            </div>
            <div class="grid grid-rows-1">
              <div class="grid grid-cols-6 gap-4">
                <div class="col-span-3">
                  <button class="w-full my-5 py-2 bg-green rounded-md font-extrabold text-white">Check Transactions</button>
                </div>
                <div class="col-span-3">
                  <button class="w-full my-5 py-2 border border-lightGray bg-culture rounded-md font-extrabold text-green">Back To Home</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection

