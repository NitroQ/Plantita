<div class="max-w-xs card rounded-md shadow-bottom bg-gray-400 h-auto">
   {{-- <a href="{{ route('') }}"> --}}
    @php $img = explode(',', $p->image) @endphp
    <img src="/uploads/products/{{ $img[0] }}" alt="Image preview"
        class="card__img mx-auto overflow-hidden rounded-tr-md rounded-tl-md w-full lg:h-52 h-auto">
    <div class="flex flex-col gap-y-1 items-center justify-center card__body mt-2 p-3">
        <p class="card__title text-xl leading-5 font-brandon-black text-center">{{ $p->name }}</p>
        <p class="card__content text-silver-500/70 text-sm leading-4  w-full text-center">
            {{ mb_strimwidth($p->description, 0, 10, "..."); }}
        </p>
        <p class="font-brandon-bold text-lg">₱{{ $p->price }}</p>
        <form class="add-to-cart">
            @csrf
            <input type="hidden" name="id" value="{{ $p->id }}">
            <input type="hidden" name="name" value="{{ $p->name }}">
            <input type="hidden" name="price" value="{{ $p->price }}">
            <button type="submit"
            class="bg-green-200 rounded-md uppercase text-center text-white leading-4 text-sm p-2 font-brandon-bold w-full">ADD
            TO
            BASKET</button>
        </form>
        
    </div>
   {{-- </a> --}}
</div>
