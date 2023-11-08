<footer class="bg-white mx-auto">
  <div class="w-full px-8 lg:px-16 py-12">
    <div class="grid grid-cols-6 gap-10">
      <div class="col-span-6 lg:col-span-2 flex flex-col items-center lg:items-start space-y-3">
        <img class="h-16" src="{{ asset('images/icons_logos/plantita-logo.svg') }}" alt="Plantita logo">
        <p class="text-center lg:text-start text-lg text-black w-96">We believe in fostering a deeper connection between people and plants,
          promoting sustainable and mindful gardening practices, and helping our customers create thriving
          green sanctuaries in their living spaces.</p>
        <div class="flex items-center gap-x-2">
          <a href=""><i class='bx bxl-facebook-circle text-2xl text-green-200 hover:text-green-200/70'></i></a>
          <a href=""><i class='bx bxl-tiktok text-2xl text-green-200 hover:text-green-200/70'></i></a>
          <a href="" class="text-green-200">
            <img src="{{ asset('images/icons_logos/twitter-logo.svg') }}" alt="Twitter logo" class="hover:opacity-70" style="height: 1.2rem;" />
          </a>
          <a href=""><i class='bx bxl-instagram text-2xl text-green-200 hover:text-green-200/70'></i></a>
        </div>
      </div>
      <div class="col-span-6 lg:col-span-1 lg:mt-5 text-center lg:text-start">
        <h5 class="uppercase font-brandon-bold text-lg mb-3">USEFUL LINKS</h5>
        <ul class="flex flex-col gap-y-2">
          <li class="text-gray-500 rounded hover:font-brandon-bold hover:text-green-200">
            <a href="{{ route('index') }}">Home</a>
          </li>
          <li class="text-gray-500 rounded hover:font-brandon-bold hover:text-green-200">
            <a href="">About</a>
          </li>
          <li class="text-gray-500 rounded hover:font-brandon-bold hover:text-green-200">
            <a href="{{ route('product') }}">Products</a>
          </li>
          <li class="text-gray-500 rounded hover:font-brandon-bold hover:text-green-200">
            <a href="{{ route('contact') }}">Contact Us</a>
          </li>
        </ul>
      </div>
      <div class="col-span-6 lg:col-span-1 lg:mt-5 text-center lg:text-start">
        <h5 class="uppercase font-brandon-bold text-lg mb-3">OUR PRODUCTS</h5>
        <ul class="flex flex-col gap-y-2">
          <li class="text-gray-500 rounded hover:font-brandon-bold hover:text-green-200">
            <a href="">Plants</a>
          </li>
          <li class="text-gray-500 rounded hover:font-brandon-bold hover:text-green-200">
            <a href="">Pots</a>
          </li>
          <li class="text-gray-500 rounded hover:font-brandon-bold hover:text-green-200">
            <a href="">Garden Tools</a>
          </li>
          <li class="text-gray-500 rounded hover:font-brandon-bold hover:text-green-200">
            <a href="">Other Essentials</a>
          </li>
        </ul>
      </div>
      <div class="col-span-6 lg:col-span-1 lg:mt-5 text-center lg:text-start">
        <h5 class="uppercase font-brandon-bold text-lg mb-3">CONTACT US</h5>
        <ul class="flex flex-col items-center lg:items-start gap-y-2">
          <li class="text-gray-500">
            555 Lakandula Street, Santa Cruz, Manila 1234 Metro Manila, Philippines
          </li>
          <li class="flex gap-x-2 items-center">
            <span class="font-brandon-bold">Phone:</span>
            <span class="text-gray-500"> (+63) 923 456 7891</span>

          </li>
          <li class="flex gap-x-2 items-center">
            <span class="font-brandon-bold">Email:</span>
            <span class="text-gray-500">plantitacommerce@gmail.com</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="bg-gray-400 text-center py-2">
    <h5 class="text-green-200">
      Copyright 2023 &copy; <span class="font-brandon-bold">Plantita e-Commerce</span>
    </h5>
  </div>
</footer>