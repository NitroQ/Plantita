<div class="max-w-xs card h-full text-center rounded-lg shadow-bottom bg-gray-400 hover:bg-green-100 hover:text-green-200 duration-500">
  <a href="{{ route('product.show', [$p->id]) }}" class="flex flex-col items-center w-full">
    @php $img = explode(', ', $p->image) @endphp
    <div class="relative w-full">
      <img src="/uploads/products/{{ $img[0] }}" alt="Image preview" class="h-[280px] w-full rounded-tr-md rounded-tl-md object-cover">
      <img src="{{ asset('images/icons_logos/green-watercan-icon.svg') }}" class="w-8 h-8 text-green-200 absolute top-0 end-0 m-3" alt="" />
    </div>
    <div class="flex flex-col gap-y-1 items-center mt-2 p-3">
      <p class="card__title text-xl leading-5 font-brandon-black text-center">{{ $p->name }}</p>
      <p class="card__content text-silver-500/70 w-3/5 text-center leading-5 overflow-hidden line-clamp-2">
        {{ $p->description }}
      </p>
      <p class="text-green-200 font-brandon-black text-xl my-1">₱{{ $p->price }}</p>
      <form class="add-to-cart">
        @csrf
        <input type="hidden" name="id" value="{{ $p->id }}">
        <input type="hidden" name="name" value="{{ $p->name }}">
        <input type="hidden" name="price" value="{{ $p->price }}">
        <input type="hidden" name="quantity" value="{{ $p->quantity }}">
        @auth
        <button type="submit" class="bg-green-200 mb-1 rounded-lg uppercase text-center text-white leading-4 text-sm px-5 py-3 font-brandon-bold w-full">ADD TO BASKET</button>
        @endauth
        @guest
        <a href="{{ route('signin') }}">
          <button type="button" class="bg-green-200 mb-1 rounded-lg uppercase text-center text-white leading-4 text-sm px-5 py-3 font-brandon-bold w-full">ADD TO BASKET</button>
        </a>
        @endguest
      </form>
    </div>
  </a>
</div>