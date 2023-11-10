@extends('layout.client.front')
@section('title', 'View Products')
@section('content')
<section class="">
  <div class="text-lg text-gray-500 mb-5 flex space-x-2">
    <span>Plants</span>
    <span>/</span>
    <span>Flowering</span>
    <span>/</span>
    <span>{{ $product->name }}</span>
  </div>
  <input type="hidden" name="max" value="{{ $product->quantity }}">
  <div class="grid grid-cols-12 gap-x-12">
    @php $img = explode(', ', $product->image) @endphp
    <div class="col-span-6 flex flex-wrap">
      <div class="flex items-center gap-x-5 w-full">
        <div class="flex flex-col flex-wrap gap-y-3 max-w-[25%]">
          @for($i = 1; $i < count($img); $i++) <img class="w-full aspect-[4/3] h-[130px] object-cover rounded" src="/uploads/products/{{ $img[$i] }}" alt="">
            @endfor
        </div>
        <div class="w-full">
          <img class="w-full h-[555px] object-cover rounded" src="/uploads/products/{{ $img[0] }}" alt="">
        </div>
      </div>
    </div>
    <div class="col-span-6 flex flex-col view-products__info gap-y-3 mt-5">
      <div class="flex justify-between items-start">
        <div>
          <h2 class="font-brandon-black italic leading-10 text-5xl">{{ $product->name }}</h2>
          <h4 class="text-3xl text-green-200 leading-9 font-brandon-bold">₱ {{ $product->price }}</h4>
        </div>
        <button type="button" class="bg-white hover:bg-green-100 rounded-full p-2 shadow-bottom add-to-likes" data-product-id="{{ $product->id }}">
          <img src="{{ asset('images/icons_logos/green-watercan-icon.svg') }}" class="w-10 h-10 text-green-200" alt="" />
        </button>
      </div>
      <p class="text-xl">
        <span class="font-brandon-bold">Scientific Name:</span>
        <span class="font-brandon-regular italic">{{ $product->scientific_name }}</span>
      </p>
      <p class="text-xl">
        <span class="font-brandon-bold">Plant Life Span:</span>
        <span class="font-brandon-regular italic">{{ $product->lifespan }}</span>
      </p>
      <p class="text-xl leading-7">
        {{ $product->description }}
      </p>
      <div class="h-full relative">
        <div class="absolute top-1/2 bottom-0">
          <div class="flex items-center w-auto gap-5 mb-5">
            <button class="w-12 h-12 items-center flex justify-center rounded-full bg-white shadow-bottom" id="minus">
              <i class='bx bx-minus text-green-200 text-4xl'></i>
            </button>
            <span class="text-3xl" id="quantity">1</span>
            <button class="w-12 h-12 items-center flex justify-center rounded-full bg-white shadow-bottom" id="plus">
              <i class='bx bx-plus text-green-200 text-4xl'></i>
            </button>
          </div>
          <form class="add-to-cart-custom">
            @csrf
            <input type="hidden" name="id" value="{{ $product->id }}">
            <input type="hidden" name="name" value="{{ $product->name }}">
            <input type="hidden" name="price" value="{{ $product->price }}">
            <input type="hidden" name="quantity_specific" value="1">
            @auth
            <button type="submit" class="bg-green-200 hover:bg-green-200/80 py-3 px-5 w-full text-white font-brandon-black rounded-md text-lg mt-5">ADD TO BASKET</button>
            @endauth
            @guest
            <a href="{{ route('signin') }}">
              <button type="button" class="bg-green-200 hover:bg-green-200/80 py-3 px-5 w-full text-white font-brandon-black rounded-md text-lg mt-5">ADD TO BASKET</button>
            </a>
            @endguest
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="view-product__plant-care my-16">
    <h2 class="text-4xl font-brandon-black italic">Plant Care Information</h2>
    <div class="grid grid-cols-3 gap-x-4 mt-5">
      <div class="col-span-1">
        <div class="bg-white py-4 px-5 rounded-md space-y-3 shadow-bottom">
          <div class="flex justify-between items-center">
            <p class="text-2xl text-green-200">
              <span class="font-brandon-black italic">Care Level:</span>
              <span class="font-brandon-regular">{{ $product->care_level }}</span>
            </p>
            <i class='bx bxs-leaf text-green-200 text-4xl'></i>
          </div>
          <p class="text-lg leading-7">{{ $product->care_description }} </p>
        </div>
      </div>
      <div class="col-span-1">
        <div class="bg-white py-4 px-5 rounded-md space-y-3 shadow-bottom">
          <div class="flex justify-between items-center">
            <p class="text-2xl text-slate-800">
              <span class="font-brandon-black italic">Watering:</span>
              <span class="font-brandon-regular">{{ $product->watering_level }}</span>
            </p>
            <i class='bx bxs-droplet text-slate-800 text-4xl'></i>
          </div>
          <p class="text-lg leading-7">{{ $product->watering_description }}</p>
        </div>
      </div>
      <div class="col-span-1">
        <div class="bg-white py-4 px-5 rounded-md space-y-3 shadow-bottom">
          <div class="flex justify-between items-center">
            <p class="text-2xl text-yellow-600">
              <span class="font-brandon-black italic">Sunlight:</span>
              <span class="font-brandon-regular">{{ $product->sun_level }}</span>
            </p>
            <i class='bx bxs-sun text-yellow-600 text-4xl'></i>
          </div>
          <p class="text-lg leading-7">{{ $product->sun_description }}</p>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  <div class="view-products__extra my-5">
    <h1 class="text-3xl italic">You may also like...</h1>
    <div class="flex items-center gap-x-4 justify-center my-5">

      @foreach($suggest as $s)
      @component('layout.components.front-components.Product', ['p' => $s])
      @endcomponent
      @endforeach
    </div>
  </div>
</section>
@endsection

@section('script')
<script>
  $(document).ready(function(){

    var max = $('input[name="max"]').val();
   

    $('#plus').click(function() {
       if(parseInt($('#quantity').text()) < max){
        var quantity = parseInt($('#quantity').text()) + 1;
        $('#quantity').text(quantity);
        $('input[name="quantity_specific"]').val(quantity);
       }else{
        alert('Maximum quantity reached!');
       }
    });

    $('#minus').click(function() {
        if(parseInt($('#quantity').text()) > 1){
          var quantity = parseInt($('#quantity').text()) - 1;
          $('#quantity').text(quantity);
          $('input[name="quantity_specific"]').val(quantity);
        }
    });

    $('.add-to-cart-custom').submit(function(event) {
            event.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: "{{ route('add-cart') }}",
                data: formData,
                success: function(response) {
                    alert(response.message);
                    console.log(response);
                },
                error: function(error) {
                    console.error(error);
                }
            });
        });

  });
</script>
@endsection