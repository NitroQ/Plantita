<nav class="navbar w-full">
    <div class="flex items-center justify-between bg-gray-400 py-3 px-20 bg-culture">
        <p class="uppercase text-sm">
            WHEN IT COMES TO PLANTS, IN
            <span class="font-bold italic">TITA WE TRUST</span>
        </p>
        <div class="flex items-center gap-x-4">
            <i class='bx bxl-facebook-circle text-2xl'></i>
            <i class='bx bxl-tiktok text-2xl'></i>
            <img src="{{ asset('images/twitter-logo.svg') }}" alt="Twitter logo">
            <i class='bx bxl-instagram text-2xl'></i>
        </div>
    </div>
    <button data-collapse-toggle="navbar-default" type="button" class="block md:hidden ml-auto pr-5"
        aria-controls="navbar-default" aria-expanded="false">
        <i class='bx bx-menu text-3xl'></i>
    </button>
    <div class="hidden md:flex flex-1 items-center justify-between py-3 md:py-5 gap-10 px-10 bg-white shadow-bottom"
        id="navbar-default">
        <a class="navbar__logo">
            <img class="mr-auto" src="{{ asset('images/plantita-logo.svg') }}" alt="Plantita logo">
        </a>
        <ul class="flex gap-x-5 navbar__links">
            <li>
                <a class="text-black " href="">Home</a>
            </li>
            <li>
                <a class="text-black " href="">Plants</a>
            </li>
            <li>
                <a class="text-black " href="">Essentials</a>
            </li>
            <li>
                <a class="text-black " href="">About Us</a>
            </li>
            <li>
                <a class="text-black " href="">Contact Us</a>
            </li>

        </ul>
        <ul class="flex gap-x-3 navbar__links">
            <li class="flex flex-col items-center justify-center">
                <i class="bx bx-user font-bold text-3xl text-green"></i>
                <a href="">Sign in</a>
            </li>
            <li class="flex flex-col items-center justify-center">
                <i class="bx bx-search font-bold text-3xl text-green"></i>
                <a href="">Search</a>
            </li>
            <li class="flex flex-col items-center justify-center">
                <img src="{{ asset('images/water-can.svg') }}" alt="">
                <a href="">Likes</a>
            </li>
            <li class="flex flex-col items-center justify-center">
                <i class="bx bx-basket font-bold text-3xl text-green"></i>
                <a href="">Basket</a>
            </li>
        </ul>
    </div>
</nav>
