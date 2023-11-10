@extends('layout.client.admin')
@section('title', 'View Transaction')
@section('content')
<section>
  <div class="flex mb-5">
    <a href="{{ route('admin.transactions.index') }}"><i class='bx bx-chevron-left me-3 text-5xl text-green-200'></i></a>
    <h1 class="text-4xl font-brandon-bold">Transaction #{{ $t->id }}</h1>
  </div>
  <div class="grid grid-cols-5 gap-8 items-start">
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