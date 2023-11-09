@extends('layout.client.front')
@section('title', 'Products')
@section('content')

<section>
  <div class="grid grid-cols-8 gap-16">
    <div class="col-span-8">
      <div class="lg:ml-5 mb-3">
        <h3 class="text-4xl font-brandon-bold leading">My Likes</h3>
        <h5 class="text-base text-gray-500">20 results</h5>
      </div>
      <div class="grid lg:grid-cols-4 grid-cols-1">
        @foreach ($products as $p)
        <div class="mb-5 mx-5">
            @component('layout.components.front-components.Product', ['p' => $p])
            @endcomponent
        </div>
        @endforeach
      </div>
      <div class="flex justify-center mt-10 mx-auto">
        <button class="bg-green-200 rounded-md uppercase text-center text-white leading-4 text-sm p-2 font-brandon-bold w-52">Show More</button>
      </div>
    </div>
  </div>
</section>

@endsection