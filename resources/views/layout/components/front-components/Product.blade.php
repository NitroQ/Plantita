<div class="max-w-xs card rounded-md shadow-bottom bg-culture h-auto">
  <img src="{{ $image }}" alt="Image preview"
    class="card__img mx-auto overflow-hidden rounded-tr-md rounded-tl-md w-full lg:h-52 h-auto">
  <div class="flex flex-col gap-y-1 items-center justify-center card__body mt-2 p-3">
    <p class="card__title text-xl leading-5 font-brandon-black text-center">{{ $productName }}</p>
    <p class="card__content text-silver-500/70 text-sm leading-4  w-full text-center">
      {{ $content }}
    </p>
    <p class="font-brandon-bold text-lg">₱{{ $productPrice }}</p>
    <button
      class="bg-green rounded-md uppercase text-center text-white leading-4 text-sm p-2 font-brandon-bold w-full">ADD
      TO
      BASKET</button>
  </div>
</div>
