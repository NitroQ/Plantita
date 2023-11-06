@extends('layout.client.front')
@section('title', 'Products')
@section('content')
    <section class="products grid lg:grid-cols-10 grid-cols-1 gap-x-10 py-0 px-10 container mx-auto">
        <aside class="lg:block hidden col-span-2 products__filter h-screen pr-2 w-full">
            <div class="h-full">
                <div class="md:flex flex-col w-72">
                    <div class="flex justify-between items-center mt-3">
                        <p class="text-lg font-brandon-bold">Filter</p>
                        <button class="text-orange font-brandon-bold text-lg">Reset</button>
                    </div>
                    <div class="mt-3 flex flex-col gap-y-3">
                        <button class="flex items-center gap-x-5">
                            <i class='bx bxs-heart text-xl text-green'></i>
                            <span class="text-xl">Likes</span>
                        </button>
                    </div>
                </div>
                <div class="mt-3 duration-500">
                    <button id="plantsDropdownBtn" class="flex items-center gap-x-2">
                        <i id="plantsDown" class='bx bx-chevron-right text-2xl text-green duration-500'></i>
                        <span class="text-xl">Plants</span>
                    </button>
                    <div id="plantsDropdownMenu" class="ml-7 mt-3 hidden h-0">
                        <ul class="space-y-2">
                            <li class="flex justify-between items-center">
                                <span class="text-md">All</span>
                                <input type="checkbox" name="" id=""
                                    class="checked:bg-green w-4 h-4 rounded-sm">
                            </li>
                            <li class="flex justify-between items-center">
                                <span class="text-md">Bush</span>
                                <input type="checkbox" name="" id=""
                                    class="checked:bg-green w-4 h-4 rounded-sm">
                            </li>
                            <li class="flex justify-between items-center">
                                <span class="text-md">Flowering</span>
                                <input type="checkbox" name="" id=""
                                    class="checked:bg-green w-4 h-4 rounded-sm">
                            </li>
                            <li class="flex justify-between items-center">
                                <span class="text-md">Shrub</span>
                                <input type="checkbox" name="" id=""
                                    class="checked:bg-green w-4 h-4 rounded-sm">
                            </li>
                            <li class="flex justify-between items-center">
                                <span class="text-md">Succulent</span>
                                <input type="checkbox" name="" id=""
                                    class="checked:bg-green w-4 h-4 rounded-sm">
                            </li>
                            <li class="flex justify-between items-center">
                                <span class="text-md">Perennial</span>
                                <input type="checkbox" name="" id=""
                                    class="checked:bg-green w-4 h-4 rounded-sm">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-3">
                    <button id="essentialsDropdownBtn" class="flex items-center gap-x-2">
                        <i id="essentialsDown" class='bx bx-chevron-right text-2xl text-green'></i>
                        <span class="text-xl">Essentials</span>
                    </button>
                    <div id="essentialsDropdownMenu" class="ml-7 mt-3 hidden h-0 duration-500">
                        <ul class="space-y-2">
                            <li class="flex justify-between items-center">
                                <span class="text-md">All</span>
                                <input type="checkbox" name="" id=""
                                    class="checked:bg-green w-4 h-4 rounded-sm">
                            </li>
                            <li class="flex justify-between items-center">
                                <span class="text-md">Soil</span>
                                <input type="checkbox" name="" id=""
                                    class="checked:bg-green w-4 h-4 rounded-sm">
                            </li>
                            <li class="flex justify-between items-center">
                                <span class="text-md">Pots</span>
                                <input type="checkbox" name="" id=""
                                    class="checked:bg-green w-4 h-4 rounded-sm">
                            </li>
                            <li class="flex justify-between items-center">
                                <span class="text-md">Watering Tools</span>
                                <input type="checkbox" name="" id=""
                                    class="checked:bg-green w-4 h-4 rounded-sm">
                            </li>
                            <li class="flex justify-between items-center">
                                <span class="text-md">Gardening Tools & Accessories</span>
                                <input type="checkbox" name="" id=""
                                    class="checked:bg-green w-4 h-4 rounded-sm">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <div class="lg:col-span-8 col-span-1 lg:mx-0 mx-auto products__items">
            <div class="lg:ml-5 mb-3">
                <h3 class="text-2xl font-brandon-bold leading-7">Plants</h3>
                <h5 class="text-base text-gray">20 results</h5>
            </div>
            <div class="grid lg:grid-cols-4 grid-cols-1">
                @foreach ($prods as $p)
                    <div class="mb-5 mx-5">
                        @component('layout.components.front-components.Product', $p)
                        @endcomponent
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="flex justify-center mt-10 mx-auto">
        <button
            class="bg-green-200 rounded-md uppercase text-center text-white leading-4 text-sm p-2 font-brandon-bold w-52">SHOW
            MORE</button>
    </div>

@endsection
@section('script')
    <script src="{{ asset('js/essentialsDropdown.js') }}"></script>
    <script src="{{ asset('js/plantsDropdown.js') }}"></script>

@endsection
