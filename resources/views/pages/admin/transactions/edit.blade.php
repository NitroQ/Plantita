@extends('layout.client.admin')
@section('title', 'Order Packed')
@section('content')
<section>
  <div class="flex mb-5">
    <a href="{{ route('admin.transactions.index') }}"><i class='bx bx-chevron-left me-3 text-5xl text-green-200'></i></a>
    <h1 class="text-4xl font-brandon-bold">Transaction #{{ $t->id }}</h1>
  </div>
  <div class="grid grid-cols-5 gap-8 items-start">
    <div class="col-span-5 lg:col-span-2 space-y-8">
      <div class="col-span-5 lg:col-span-2 shadow-leftBottom p-5 rounded-md">
        <div class="flex justify-between mb-3">
          <h3 class="text-2xl font-brandon-bold">Transaction Details</h3>
          @if($t->status == "pending")
          <span class="text-sm bg-orange/20 text-orange uppercase font-brandon-black px-3 py-2 rounded">Pending</span>
          @elseif($t->status == "packed")
          <span class="text-sm bg-yellow-400/20 text-yellow-400 uppercase font-brandon-black px-3 py-2 rounded">Packed</span>
          @elseif($t->status == "shipped")
          <span class="text-sm bg-green-200/20 text-green-200 uppercase font-brandon-black px-3 py-2 rounded">Shipped</span>
          @elseif($t->status == "done")
          <span class="text-sm bg-green-200/20 text-green-200 uppercase font-brandon-black px-3 py-2 rounded">Done</span>
          @elseif($t->status == "cancelled")
          <span class="text-sm bg-crimson/20 text-crimson uppercase font-brandon-black px-3 py-2 rounded">Cancelled</span>
          @endif
        </div>
        <div class="grid grid-cols-5 gap-y-3 gap-x-5 items-start text-lg">
          <div class="col-span-2 text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">Transaction Number</div>
          <p class="col-span-3 mt-1">#{{ $t->id }}</p>
          <div class="col-span-2 text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">Transaction Date</div>
          <p class="col-span-3 mt-1">{{ $t->created_at->format('M d, Y') }}</p>
          <div class="col-span-2 text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">Shipping Method</div>
          <p class="col-span-3 mt-1 capitalize">{{ $t->ship_method }}</p>
          <div class="col-span-2 text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">Shipping Details</div>
          <span class="col-span-3 mt-1 capitalize">
            <p>{{ $t->name }}</p>
            <p>{{ $t->phone }}</p>
            <p>{{ $t->company }} {{ $t->street_address }} {{ $t->building_address }} {{ $t->city }} {{ $t->zip_code }}</p>
          </span>
          <div class="col-span-2 text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">Payment Method</div>
          <span class="col-span-3 mt-1 capitalize">
            <p>{{ $t->pay_method }}</p>
            {{-- <p>#1273459049084</p> --}}
          </span>
        </div>
      </div>
      @if($t->status == "pending")
      <div class="space-y-3">
        <div class="grid grid-cols-3 space-x-3 pt-3">
          <a type="button" href="{{ route('transaction.status',['id' => $t->id, 'status' => 'cancelled']) }}" class="bg-crimson text-white text-center text-lg py-2 rounded hover:bg-crimson/80"><i class='bx bx-x-circle me-3'></i>Cancel Order</a>
          <button class="bg-blue-100 text-white text-lg py-2 rounded hover:bg-blue-100/80"><i class='bx bx-printer me-3'></i>Print Waybill</button>
          <a type="button" href="{{ route('transaction.status',['id' => $t->id, 'status' => 'packed']) }}" class="bg-yellow-400 text-center text-lg py-2 rounded hover:bg-yellow-400/80"><i class='bx bx-package me-3'></i>Item Prepared</a>
        </div>
      </div>
      @elseif($t->status == "packed")
      <form action="{{ route('transaction.pack',[$t->id]) }}" method="POST" class="space-y-3">
        @csrf
        <label for="care-level" class="text-xl font-brandon-bold block">Enter Shipment Details</label>
        <input id="shipment" type="text" name="courier" class="block w-full col-span-2 rounded-lg border {{ $errors->has('courier') ? 'border-red-500' : 'border-lavender' }} px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" 
        value="{{ old('courier') }}" placeholder="Courier">
        <span class="text-sm text-crimson my-1">{{$errors->first('courier')}}</span>
        <input id="shipment" type="text" name="courier_location" class="block w-full col-span-2 rounded-lg border {{ $errors->has('courier_location') ? 'border-red-500' : 'border-lavender' }} px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" 
        value="{{ old('courier_location') }}" placeholder="Courier Location">
        <span class="text-sm text-crimson my-1">{{$errors->first('courier_location')}}</span>
        <input id="shipment" type="number" name="shipping_id" class="block w-full col-span-2 rounded-lg border {{ $errors->has('shipping_id') ? 'border-red-500' : 'border-lavender' }} px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" 
        value="{{ old('shipping_id') }}" placeholder="Tracking/Reference No.">
        <span class="text-sm text-crimson my-1">{{$errors->first('shipping_id')}}</span>
        <div class="grid grid-cols-3 space-x-3 pt-3">
          <button type="button" href="{{ route('transaction.status',['id' => $t->id, 'status' => 'cancelled']) }}" class="bg-crimson text-white text-lg py-2 rounded hover:bg-crimson/80"><i class='bx bx-x-circle me-3'></i>Cancel Order</button>
          <button type="button" class="bg-blue-100 text-white text-lg py-2 rounded hover:bg-blue-100/80"><i class='bx bx-printer me-3'></i>Print Waybill</button>
          <button type="submit" class="bg-green-200 text-white text-lg py-2 rounded hover:bg-green-200/80"><i class='bx bxs-truck me-3'></i>Ship Item</button>
        </div>
      </form>
      @endif
    </div>
    <div class="col-span-5 lg:col-span-3 order-first lg:order-last">
      <div class="p-10 rounded-lg bg-gray-400">
        <div class="grid grid-cols-5 items-center gap-y-5">
          @foreach(\App\Models\TransactionProducts::where('transaction_id','=', $t->id)->get() as $td)
          @php $product = App\Models\Product::find($td->product_id); $img = explode(', ', $product->image); @endphp

          <img src="/uploads/products/{{ $img[0] }}" class="w-28 h-28 object-cover rounded-lg" />
          <div class="col-span-3">
            <p class="font-brandon-bold text-xl">{{ $product->name }}</p>
            <p>Quantity: {{ $td->quantity }}</p>
          </div>
          <p class="text-xl text-end">₱{{ $product->price * $td->quantity }}</p>
          @endforeach
          <div class="col-span-5 grid grid-cols-2 text-lg">
            <p>Subtotal</p>
            <p class="font-brandon-bold text-end">₱{{ $t->subtotal }}</p>
            <p>Shipping</p>
            <p class="font-brandon-bold text-end">₱{{ $t->shipping_cost }}</p>
          </div>
          <div class="flex justify-between col-span-5 text-xl">
            <p class="font-brandon-bold">Total</p>
            <p class="font-brandon-bold">₱{{ $t->total }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection