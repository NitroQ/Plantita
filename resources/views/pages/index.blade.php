  @extends('layout.client.front')
  @section('title', 'Home')
  @section('content')
    <section class="home max-w-screen-2xl px-10">
      <div class="grid lg:grid-cols-12">
        <div class="space-y-4 lg:col-span-7 lg:space-y-3 flex flex-col justify-center">
          <h1 class="text-5xl">
            When it comes to plants, <br> in <span class="font-brandon-black italic">Tita we trust</span>
          </h1>
          <p class="text-lg">Shop our curated selection of plants, hand-picked by titas for titas and plant
            <br>
            lovers
            everywhere. Find the perfect plant for your space and style with
            <span class="font-brandon-bold italic">Plantita!</span>
          </p>
          <a href="http://"
            class="flex-none text-md inline-block rounded-md bg-green px-4 py-2 font-brandon-bold uppercase w-32 text-center text-white">SHOP
            NOW</a>
        </div>
        <div
          class="mx-auto md:block hidden bg-[url('../../public/images/home/home-plant-babies.webp')] home__img-container relative bg-cover bg-center bg-no-repeat md:col-span-5 w-full h-[50vh] rounded-md">
          <div class="absolute z-10 flex items-end h-full w-full px-10 bottom-10">
            <div class="text-left">
              <p class="text-4xl text-white font-brandon-bold">Learn how to
                <span class="uppsercase">TAKE CARE</span>
                of your <span class="uppercase">PLANT BABIES</span>
              </p>
            </div>
          </div>
          <div class="bg-light-green-pattern home__img-overlay absolute w-full bottom-0 h-[50vh] rounded-md"></div>
        </div>
      </div>
      {{-- 2nd row --}}
      <div class="flex items-center justify-center gap-x-3 my-10">
        <div
          class="mx-auto md:block hidden bg-[url('../../public/images/home/home-succulent-plants.webp')] home__img-container relative bg-cover bg-center bg-no-repeat w-full h-[50vh] rounded-md">
          <div class="absolute z-10 flex items-end h-full w-full px-10 bottom-10">
            <div class="text-left">
              <p class="text-4xl text-white font-brandon-bold">10% OFF
                on
                <span class="uppercase">SUCCULENT PLANTS</span>
              </p>
            </div>
          </div>
          <div class="bg-light-green-pattern home__img-overlay absolute w-full bottom-0 h-[50vh] rounded-md"></div>
        </div>
        <div
          class="mx-auto md:block hidden bg-[url('../../public/images/home/home-deal.webp')] home__img-container relative bg-cover bg-center bg-no-repeat w-full h-[50vh] rounded-md">
          <div class="absolute z-10 flex items-end h-full w-full px-10 bottom-10">
            <div class="text-left">
              <p class="text-4xl text-white font-brandon-bold">
                <span class="uppsercase">WIDE RANGES</span> of choices on
                <span class="uppsercase">SEEDS</span>
              </p>
            </div>
          </div>
          <div class="bg-light-green-pattern home__img-overlay absolute w-full bottom-0 h-[50vh] rounded-md"></div>
        </div>
        <div
          class="mx-auto md:block hidden bg-[url('../../public/images/home/home-seeds.webp')] home__img-container relative bg-cover bg-center bg-no-repeat w-full h-[50vh] rounded-md">
          <div class="absolute z-10 flex items-end h-full w-full px-10 bottom-10">
            <div class="text-left">
              <p class="text-4xl text-white font-brandon-bold">
                <span class="uppsercase">BUY ONE TAKE ONE</span> deals
                for <span class="uppercase">NOVEMBER!</span>
              </p>
            </div>
          </div>
          <div class="bg-light-green-pattern home__img-overlay absolute w-full bottom-0 h-[50vh] rounded-md"></div>
        </div>
      </div>
      <div class="flex items-center gap-x-4">
        <div class="home__tips flex items-center gap-x-2">
          <div class="h-10 w-10 rounded-full bg-culture">
            <img src="{{ asset('images/icons_logos/idea-icon.svg') }}" alt="">
          </div>
        </div>
      </div>
    </section>
  @endsection
