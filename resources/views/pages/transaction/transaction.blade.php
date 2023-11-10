@extends('layout.client.front')
@section('title', 'Transaction')
@section('content')

<div class="">
  <h2 class="font-brandon-black text-4xl">Transactions</h2>
  {{-- ITEM CARD: SHIPPED STATUS --}}
  @foreach($transactions as $t)
  <div class="py-4">
    <div class="shadow-leftBottom bg-white rounded-lg">
      <div class="border-b-2 border-lightGray">
        <div class="flex justify-between items-center p-5">
          <div>
            <h4 class="font-brandon-black text-2xl">Transaction: #{{ $t->id }}</h4>
            <h4 class="font-brandon-regular text-xl">Items:
              @foreach( \App\Models\TransactionProducts::where('transaction_id','=', $t->id)->get() as $item )
              {{ \App\Models\Product::find($item->product_id)->name  }},
              @endforeach
            </h4>
          </div>
          <div class="text-end">
            <h4 class="font-brandon-black text-2xl text-green-200 font-bold">₱{{ $t->subtotal }}</h4>
            <p class="text-sm text-gray-500">+{{ $t->shipping_cost }} (Shipping)</p>
          </div>
        </div>
      </div>
      <div class="flex justify-between">
        <div class="flex items-center px-5">
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
        <div class="flex p-4 items-center space-x-5">
          <h4 class="font-brandon-regular text-xl text-gray-500">Order Total:</h4>
          <h4 class="font-brandon-black text-2xl text-green-200">₱{{ $t->total }}</h4>
          @if($t->status == 'shipped')
          <a href="{{ route('received-transaction', [$t->id]) }}" class="py-2 px-4 bg-green-200 hover:bg-green-200/80 rounded-lg text-white">Products Received</a>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach


@endsection