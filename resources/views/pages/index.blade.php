  @extends('layout.client.front')
  @section('title', 'Home')
  @section('css')
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
  <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
  @endsection
  @section('content')
  <section class="">
    <div class="grid grid-cols-12 gap-5">
      <div class="space-y-4 col-span-8 flex flex-col justify-center">
        <h1 class="text-5xl lg:w-3/5 w-full">
          When it comes to plants, <br/> in <span class="font-brandon-black italic">Tita we trust</span>
        </h1>
        <p class="text-lg lg:w-2/3 w-full">Shop our curated selection of plants, hand-picked by titas for titas
          and plant lovers everywhere. Find the perfect plant for your space and style with <span class="font-brandon-bold italic">Plantita!</span>
        </p>
        <a href="http://" class="flex-none text-md inline-block rounded-md bg-green-200 px-4 py-2 font-brandon-bold uppercase w-32 text-center text-white">SHOP NOW</a>
      </div>
      <div class="mx-auto md:block hidden bg-[url('../../public/images/home/home-plant-babies.webp')] home__img-container relative bg-cover bg-center bg-no-repeat md:col-span-4 w-full h-[35vh] rounded-md">
        <div class="absolute z-10 flex items-end h-full w-full px-8 bottom-8">
          <div class="text-left">
            <p class="text-4xl text-white font-brandon-bold">Learn how to
              <span class="uppercase">Take Care</span><br />of your
              <span class="uppercase">Plant Babies</span>
            </p>
          </div>
        </div>
        <div class="bg-light-green-pattern home__img-overlay absolute w-full bottom-0 h-[35vh] rounded-md"></div>
      </div>
      <div class="mx-auto md:block hidden bg-[url('../../public/images/home/home-succulent-plants.webp')] home__img-container relative bg-cover bg-center bg-no-repeat md:col-span-4 w-full h-[40vh] rounded-md">
        <div class="absolute z-10 flex items-end h-full w-full px-8 bottom-8">
          <div class="text-left">
            <p class="text-4xl text-white font-brandon-bold">
              10% off on<br/>
              <span class="uppercase">Succulent Plants</span>
            </p>
          </div>
        </div>
        <div class="bg-light-green-pattern home__img-overlay absolute w-full bottom-0 h-[40vh] rounded-md"></div>
      </div>
      <div class="mx-auto md:block hidden bg-[url('../../public/images/home/home-deal.webp')] home__img-container relative bg-cover bg-center bg-no-repeat md:col-span-4 w-full h-[40vh] rounded-md">
        <div class="absolute z-10 flex items-end h-full w-full px-8 bottom-8">
          <div class="text-left">
            <p class="text-4xl text-white font-brandon-bold">
              <span class="uppercase">Wide ranges</span> of choices <br />on
              <span class="uppercase">Seeds</span>
            </p>
          </div>
        </div>
        <div class="bg-light-green-pattern home__img-overlay absolute w-full bottom-0 h-[40vh] rounded-md"></div>
      </div>
      <div class="mx-auto md:block hidden bg-[url('../../public/images/home/home-seeds.webp')] home__img-container relative bg-cover bg-center bg-no-repeat md:col-span-4 w-full h-[40vh] rounded-md">
        <div class="absolute z-10 flex items-end h-full w-full px-8 bottom-8">
          <div class="text-left">
            <p class="text-4xl text-white font-brandon-bold">
              <span class="uppercase">Buy One Take One</span><br />deals for
              <span class="uppercase">November!</span>
            </p>
          </div>
        </div>
        <div class="bg-light-green-pattern home__img-overlay absolute w-full bottom-0 h-[40vh] rounded-md"></div>
      </div>
    </div>
    <div class="grid lg:grid-cols-5 grid-cols-2 lg:gap-y-0 gap-y-3 gap-x-4 lg:place-items-center my-20">
      <div class="col-span-1 home__tips flex items-center justify-center gap-x-4">
        <div class="h-12 w-12 rounded-full bg-culture shadow-bottom flex items-center justify-center">
          <img class="h-7 w-7" src="{{ asset('images/icons_logos/idea-icon.svg') }}" alt="">
        </div>
        <p class="font-brandon-black text-lg lg:w-2/4 w-full leading-5">Expert tips for healthy plants</p>
      </div>
      <div class="col-span-1 home__tips flex items-center justify-center gap-x-4">
        <div class="h-12 w-12 rounded-full bg-culture shadow-bottom flex items-center justify-center">
          <img class="h-7 w-7" src="{{ asset('images/icons_logos/idea-icon.svg') }}" alt="">
        </div>
        <p class="font-brandon-black text-lg lg:w-2/4 w-full leading-5">Indoor Plants for every space</p>
      </div>
      <div class="col-span-1 home__tips flex items-center justify-center gap-x-4">
        <div class="h-12 w-12 rounded-full bg-culture shadow-bottom flex items-center justify-center">
          <img class="h-7 w-7" src="{{ asset('images/icons_logos/idea-icon.svg') }}" alt="">
        </div>
        <p class="font-brandon-black text-lg lg:w-2/4 w-full leading-5">Find a suitable plant for you</p>
      </div>
      <div class="col-span-1 home__tips flex items-center justify-center gap-x-4">
        <div class="h-12 w-12 rounded-full bg-culture shadow-bottom flex items-center justify-center">
          <img class="h-7 w-7" src="{{ asset('images/icons_logos/idea-icon.svg') }}" alt="">
        </div>
        <p class="font-brandon-black text-lg lg:w-2/4 w-full leading-5">Tools for a thriving garden</p>
      </div>
      <div class="col-span-1 home__tips flex items-center justify-center gap-x-4">
        <div class="h-12 w-12 rounded-full bg-culture shadow-bottom flex items-center justify-center">
          <img class="h-7 w-7" src="{{ asset('images/icons_logos/idea-icon.svg') }}" alt="">
        </div>
        <p class="font-brandon-black text-lg lg:w-2/4 w-full leading-5">Grow your own indoor garden</p>
      </div>
    </div>
    <div class="py-5">
      <h1 class="text-5xl">What are you <span class="italic font-brandon-black">looking</span> for?</h1>

      <div class="grid lg:grid-cols-2 my-10 gap-x-4 lg:gap-y-0 gap-y-3">
        <div class="col-span-1 mx-auto bg-[url('../../public/images/home/home-cactusplant.webp')] home__img-container relative bg-cover bg-center bg-no-repeat w-full h-[40vh] rounded-md">
          <div class="absolute z-10 px-10 top-8">
            <div class="flex justify-center flex-col xl:h-80 lg:h-72 h-full w-full">
              <h4 class="lg:text-5xl md:text-3xl text-lg font-brandon-black italic text-white">Plants</h4>
              <p class="text-2xl text-white w-1/2">
                From succulents to ferns, we have everything you need to add a touch of greenery to your
                home.
              </p>
              <div class="self-start mt-auto">
                <div class="flex bg-white items-center justify-center p-3 lg:w-12 w-10 lg:h-12 h-10  rounded-full">
                  <a href="">
                    <i class='bx bx-chevron-right text-5xl'></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-light-green-pattern-full home__img-overlay absolute w-full bottom-0 h-[40vh] rounded-md">
          </div>
        </div>
        <div class="col-span-1 mx-auto bg-[url('../../public/images/home/home-water-can.webp')] home__img-container relative bg-cover bg-center bg-no-repeat w-full h-[40vh] rounded-md">
          <div class="absolute z-10 px-10 top-8">
            <div class="flex justify-center flex-col xl:h-80 lg:h-72 h-full w-full">
              <h4 class="lg:text-5xl md:text-3xl text-lg font-brandon-black italic text-white">Essentials
              </h4>
              <p class="text-2xl text-white w-1/2">
                From shovels to watering cans, we have everything you need to make your garden flourish.
              </p>
              <div class="self-start mt-auto">
                <div class="flex bg-white items-center justify-center p-3 lg:w-12 w-10 lg:h-12 h-10  rounded-full">
                  <a href="">
                    <i class='bx bx-chevron-right text-5xl'></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-light-green-pattern-full home__img-overlay absolute w-full bottom-0 h-[40vh] rounded-md">
          </div>
        </div>
      </div>
    </div>

          <div class="my-10">
              <div class="flex flex-col gap-y-2">
                  <h1 class="text-4xl">
                      Our <span class="font-brandon-black italic">Top Picks</span> for a thriving home and garden
                  </h1>
                  <p class="text-lg lg:w-[56%] w-full">
                      Discover our most popular indoor plants and gardening essentials. From lush greenery to high-quality
                      tools,
                      our best sellers are sure to elevate your home and garden.</p>
              </div>
          </div>
          <div class="product-items">
              @foreach ($prods as $p)
                  <div class="mb-5 mx-5">
                      @component('layout.components.front-components.Product', ['p' => $p])
                      @endcomponent
                  </div>
              @endforeach
          </div>
          <div class="my-10 flex justify-center items-center">
              <a href=""
                  class="bg-green-200 uppercase text-white font-brandon-bold text-md rounded-md py-2 px-3">SHOW MORE
                  PLANTS</a>
          </div>
      </section>

  @endsection

  @section('script')
  <script type="text/javascript">
    $('.product-items').slick({
      slidesToShow: 5,
      autoplay: false,
      swipe: false,
      prevArrow: `<button class='custom-slick-arrow slick-prev' aria-label="Previous" type="button">Previous</button>`,
      nextArrow: `<button class='custom-slick-arrow slick-next' aria-label="Next" type="button">Next</button>`,
      responsive: [{
          breakpoint: 1024,
          settings: {
            swipe: true,
            autoplay: true,
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 640,
          settings: {
            swipe: true,
            autoplay: true,
            slidesToShow: 1,
          }
        }
      ]
    });
  </script>
  @endsection