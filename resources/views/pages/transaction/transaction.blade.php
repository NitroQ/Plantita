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
              @foreach($transactions as $t)
              <div class="grid grid-rows-1 ">
                <div class="grid xl:grid-cols-6 gap-4">
                    <div class="col-span-6 py-4 ">
                        <div class="grid grid-cols-1 shadow-cardShadow border border-white rounded-xl bg-white">
                            <div class="grid grid-rows-1 py-2 border-b-2 border-lightGray ">
                                <div class="grid grid-cols-6 items-center justify-center p-4 px-6">
                                    {{-- <div class="col-span-1 flex justify-center items-center">
                                        <img class="sm:w-32 sm:h-full " src="{{ asset('images/home/product-1.webp') }}"
                                            alt="">
                                    </div> --}}
                                    <div class=" col-span-4 pr-6">
                                        <div class="grid grid-rows-1 ">
                                            <h4 class="font-brandon-black text-2xl">Transaction: #{{ $t->id }}</h4>
                                            <h4 class="font-brandon-regular text-xl">Items: 
                                                @foreach( \App\Models\TransactionProducts::where('transaction_id','=', $t->id)->get() as $item )
                                                {{ \App\Models\Product::find($item->product_id)->name  }}, 
                                                @endforeach</h4>
                                        </div>
                                    </div>
                                    <div class="col-span-1 flex justify-end text-end">
                                        <div class="grid grid-rows-1">
                                            <h4 class="font-brandon-black text-2xl text-green-200 font-bold">₱{{ $t->subtotal }}</h4>
                                            <p class="text-sm text-gray-500 mt-2">+{{ $t->shipping_cost }} (Shipping)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- ORDER STATUS AND TOTAL --}}
                            <div class="flex flex-col md:flex-row justify-between">
                                <div class="flex  p-4">
                                    <h4 class="font-brandon-regular text-xl text-gray-500 mr-4">Order Status:</h4>
                                    @if($t->status == 'pending')
                                    <span class="text-sm bg-orange/20 text-orange uppercase font-brandon-black px-3 py-2 rounded">Pending</span>
                                    @elseif($t->status == 'packed')
                                    <span class="text-sm bg-yellow-400/20 text-yellow-400 uppercase font-brandon-black px-3 py-2 rounded">Packed</span>
                                    @elseif($t->status == 'shipped')
                                    <span class="text-sm bg-blue-100/20 text-blue-100 uppercase font-brandon-black px-3 py-2 rounded">Shipped</span>
                                    @elseif($t->status == 'done')
                                    <span class="text-sm bg-green-100 text-green-200 uppercase font-brandon-black px-3 py-2 rounded">Done</span>
                                    @elseif($t->status == 'cancelled')
                                    <span class="text-sm bg-red-100/20 text-red-100 uppercase font-brandon-black px-3 py-2 rounded">Cancelled</span>
                                    @endif
                                </div>
                                <div class="flex p-4 items-center">
                                    <h4 class="font-brandon-regular text-xl text-gray-500">Order Total:</h4>
                                    <h4 class="font-brandon-bold text-xl text-green-200 font-bold  ml-2">₱{{ $t->total }}</h4>
                                    @if($t->status == 'shipped')
                                    <a href="{{ route('received-transaction', [$t->id]) }}"
                                        class="text-sm p-2 bg-green-200 rounded-md uppercase font-extrabold text-white ml-4">Products
                                        Received</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              @endforeach

            </div>
        </div>
    @endsection
