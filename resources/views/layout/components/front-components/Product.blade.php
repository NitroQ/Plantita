<div class="card rounded-md shadow-bottom bg-gray-400 flex flex-col">
    <img src="{{ $image }}" alt="Image preview"
        class="h-[250px] w-auto max-w-full rounded-tr-md rounded-tl-md object-cover">
    <div class="flex flex-col gap-y-1 items-center justify-center card__body mt-2 p-3">
        <a href="{{ route('products.show') }}"
            class="card__title text-xl leading-5 font-brandon-black text-center hover:underline hover:decoration-green-200 duration-500">{{ $productName }}</a>
        <p class="card__content text-silver-500/70 text-sm leading-4 w-full text-center">{{ $content }}</p>
        <p class="font-brandon-bold text-lg text-green-200">₱{{ $productPrice }}</p>
        <button
            class="bg-green-200 rounded-md uppercase text-center text-white leading-4 text-sm p-2 font-brandon-bold w-full">ADD
            TO BASKET</button>
    </div>
</div>
