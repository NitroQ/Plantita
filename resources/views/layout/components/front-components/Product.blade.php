<div class="max-w-md card rounded-md shadow-bottom bg-culture">
  <img src="{{ $image }}" alt="Image preview"
    class="card__img mx-auto overflow-hidden rounded-tr-md rounded-tl-md w-full">
  <div class="flex flex-col gap-y-2 items-center justify-center card__body mt-5 p-3">
    <p class="card__title text-xl font-brandon-black">{{ $productName }}</p>
    <p class="card__content p-3 text-silver-500/70 text-lg w-full text-center">
      {{ $content }}
    </p>
    <p class="font-brandon-bold text-lg">₱{{ $productPrice }}</p>
    <button class="bg-green rounded uppercase text-center text-white text-md p-2 font-brandon-bold">ADD TO
      BASKET</button>
  </div>
</div>
