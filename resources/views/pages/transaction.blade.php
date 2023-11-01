@extends('layout.client.front')
@section('title', 'Transaction')
@section('content')
<div class="grid xl:grid-cols-6 grid-cols-1 h-full w-full">
  <div class="col-span-6 p-6">
    <div class="grid grid-cols-1 px-6">
      <div class="grid grid-rows-1">
        <h2 class="font-brandon-black text-4xl">Transactions</h2>
      </div>
      {{-- ITEM CARD: SHIPPED STATUS --}}
      <div class="grid grid-rows-1 ">
        <div class="grid xl:grid-cols-6 gap-4">
          <div class="col-span-6 py-4 ">
            <div class="grid grid-cols-1 shadow-cardShadow border border-white rounded-xl bg-white">
              <div class="grid grid-rows-1 py-2 border-b-2 border-lightGray ">
                <div class="grid grid-cols-6 items-center justify-center p-4 px-6">
                  <div class="col-span-1 flex justify-center items-center">
                    <img class="sm:w-32 sm:h-full " src="{{ asset('images/home/product-1.webp') }}" alt="">
                  </div>
                  <div class=" col-span-4 pr-6">
                    <div class="grid grid-rows-1 ">
                      <h4 class="font-brandon-black text-2xl">African Mask</h4>
                      <h4 class="font-brandon-regular text-lg text-gray pr-6">A tropical plant with striking foliage that resembles an...</h4>
                      <h4 class="font-brandon-regular text-xl">Quantity: 4</h4>
                    </div>
                  </div>
                  <div class="col-span-1 flex justify-end text-end">
                    <div class="grid grid-rows-1">
                      <h4 class="font-brandon-black text-2xl text-green font-bold">₱2000</h4>
                      <p class="text-sm text-gray mt-2">+$250 (Shipping)</p>
                    </div>
                  </div>
                </div>
              </div>
            {{-- ORDER STATUS AND TOTAL --}}
            <div class="flex flex-col md:flex-row justify-between">
              <div class="flex  p-4">
                <h4 class="font-brandon-regular text-xl text-gray mr-4">Order Status:</h4>
                <span class="text-sm bg-green/20 text-green uppercase font-brandon-black px-3 py-2 rounded">Shipped</span>
              </div>
              <div class="flex p-4 items-center">
                <h4 class="font-brandon-regular text-xl text-gray">Order Total:</h4>
                <h4 class="font-brandon-bold text-xl text-green font-bold  ml-2">₱2,250</h4>
                <button class="text-sm p-2 bg-green rounded-md uppercase font-extrabold text-white ml-4">Products Received</button>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>

      {{-- ITEM CARD: DONE STATUS --}}
      <div class="grid grid-rows-1 ">
        <div class="grid xl:grid-cols-6 gap-4">
          <div class="col-span-6 py-4 ">
            <div class="grid grid-cols-1 shadow-cardShadow border border-white rounded-xl bg-white">
              <div class="grid grid-rows-1 py-2 border-b-2 border-lightGray ">
                <div class="grid grid-cols-6 items-center justify-center p-4 px-6">
                  <div class="col-span-1 flex justify-center items-center">
                    <img class="sm:w-32 sm:h-full " src="{{ asset('images/home/product-1.webp') }}" alt="">
                  </div>
                  <div class=" col-span-4 pr-6">
                    <div class="grid grid-rows-1 ">
                      <h4 class="font-brandon-black text-2xl">African Mask</h4>
                      <h4 class="font-brandon-regular text-lg text-gray pr-6">A tropical plant with striking foliage that resembles an...</h4>
                      <h4 class="font-brandon-regular text-xl">Quantity: 4</h4>
                    </div>
                  </div>
                  <div class="col-span-1 flex justify-end text-end">
                    <div class="grid grid-rows-1">
                      <h4 class="font-brandon-black text-2xl text-green font-bold">₱2000</h4>
                      <p class="text-sm text-gray mt-2">+$250 (Shipping)</p>
                    </div>
                  </div>
                </div>
              </div>
            {{-- ORDER STATUS AND TOTAL --}}
            <div class="flex flex-col md:flex-row justify-between">
              <div class="flex  p-4">
                <h4 class="font-brandon-regular text-xl text-gray mr-4">Order Status:</h4>
                <span class="text-sm bg-blue/20 text-blue uppercase font-brandon-black px-3 py-2 rounded">Done</span>
              </div>
              <div class="flex p-4 items-center">
                <h4 class="font-brandon-regular text-xl text-gray">Order Total:</h4>
                <h4 class="font-brandon-bold text-xl text-green font-bold  ml-2">₱2,250</h4>
                <button class="text-sm p-2 bg-green rounded-md uppercase font-extrabold text-white ml-4">Products Received</button>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>

      {{-- ITEM CARD: PACKED STATUS --}}
      <div class="grid grid-rows-1 ">
        <div class="grid xl:grid-cols-6 gap-4">
          <div class="col-span-6 py-4 ">
            <div class="grid grid-cols-1 shadow-cardShadow border border-white rounded-xl bg-white">
              <div class="grid grid-rows-1 py-2 border-b-2 border-lightGray ">
                <div class="grid grid-cols-6 items-center justify-center p-4 px-6">
                  <div class="col-span-1 flex justify-center items-center">
                    <img class="sm:w-32 sm:h-full " src="{{ asset('images/home/product-1.webp') }}" alt="">
                  </div>
                  <div class=" col-span-4 pr-6">
                    <div class="grid grid-rows-1 ">
                      <h4 class="font-brandon-black text-2xl">African Mask</h4>
                      <h4 class="font-brandon-regular text-lg text-gray pr-6">A tropical plant with striking foliage that resembles an...</h4>
                      <h4 class="font-brandon-regular text-xl">Quantity: 4</h4>
                    </div>
                  </div>
                  <div class="col-span-1 flex justify-end text-end">
                    <div class="grid grid-rows-1">
                      <h4 class="font-brandon-black text-2xl text-green font-bold">₱2000</h4>
                      <p class="text-sm text-gray mt-2">+$250 (Shipping)</p>
                    </div>
                  </div>
                </div>
              </div>
            {{-- ORDER STATUS AND TOTAL --}}
            <div class="flex flex-col md:flex-row justify-between">
              <div class="flex  p-4">
                <h4 class="font-brandon-regular text-xl text-gray mr-4">Order Status:</h4>
                <span class="text-sm bg-yellow/20 text-yellow uppercase font-brandon-black px-3 py-2 rounded">Packed</span>
              </div>
              <div class="flex p-4 items-center">
                <h4 class="font-brandon-regular text-xl text-gray">Order Total:</h4>
                <h4 class="font-brandon-bold text-xl text-green font-bold  ml-2">₱2,250</h4>
                <button class="text-sm p-2 bg-green rounded-md uppercase font-extrabold text-white ml-4">Products Received</button>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>

      {{-- ITEM CARD: PENDING STATUS --}}
      <div class="grid grid-rows-1 ">
        <div class="grid xl:grid-cols-6 gap-4">
          <div class="col-span-6 py-4 ">
            <div class="grid grid-cols-1 shadow-cardShadow border border-white rounded-xl bg-white">
              <div class="grid grid-rows-1 py-2 border-b-2 border-lightGray ">
                <div class="grid grid-cols-6 items-center justify-center p-4 px-6">
                  <div class="col-span-1 flex justify-center items-center">
                    <img class="sm:w-32 sm:h-full " src="{{ asset('images/home/product-1.webp') }}" alt="">
                  </div>
                  <div class=" col-span-4 pr-6">
                    <div class="grid grid-rows-1 ">
                      <h4 class="font-brandon-black text-2xl">African Mask</h4>
                      <h4 class="font-brandon-regular text-lg text-gray pr-6">A tropical plant with striking foliage that resembles an...</h4>
                      <h4 class="font-brandon-regular text-xl">Quantity: 4</h4>
                    </div>
                  </div>
                  <div class="col-span-1 flex justify-end text-end">
                    <div class="grid grid-rows-1">
                      <h4 class="font-brandon-black text-2xl text-green font-bold">₱2000</h4>
                      <p class="text-sm text-gray mt-2">+$250 (Shipping)</p>
                    </div>
                  </div>
                </div>
              </div>
            {{-- ORDER STATUS AND TOTAL --}}
            <div class="flex flex-col md:flex-row justify-between">
              <div class="flex  p-4">
                <h4 class="font-brandon-regular text-xl text-gray mr-4">Order Status:</h4>
                <span class="text-sm bg-orange/20 text-orange uppercase font-brandon-black px-3 py-2 rounded">Pending</span>
              </div>
              <div class="flex p-4 items-center">
                <h4 class="font-brandon-regular text-xl text-gray">Order Total:</h4>
                <h4 class="font-brandon-bold text-xl text-green font-bold  ml-2">₱2,250</h4>
                <button class="text-sm p-2 bg-green rounded-md uppercase font-extrabold text-white ml-4">Products Received</button>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>

    </div>
</div>
@endsection

