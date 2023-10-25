@extends('layout.client.admin')
  @section('title', 'Edit Info')
  @section('content')
    <section>
      <div class="flex mb-5">
          <a href="{{ route('plantcare') }}"><i class='bx bx-chevron-left me-3 text-5xl text-green'></i></a>
          <h1 class="text-4xl font-brandon-bold">African Mask</h1>
      </div>
      <div class="grid grid-cols-4 gap-8 items-start">
        <div class="col-span-2 shadow-leftBottom p-5 rounded-md space-y-3">
          <h3 class="text-2xl font-brandon-bold mb-3">Plant Care Information</h3>
          <div class="space-y-2">
            <label for="care-level" class="text-xl font-brandon-bold block">Care Level</label>
            <select id="care-level" class="border border-lavender rounded-lg focus:ring-green/20 focus:border-green/20 block w-full px-3.5 py-2.5">
              <option selected class="text-gray bg-culture hover:bg-green/10">Choose Care Level</option>
              <option value="Option 1">Option 1</option>
              <option value="Option 2">Option 2</option>
              <option value="Option 3">Option 3</option>
              <option value="Option 4">Option 4</option>
            </select>
            <textarea id="message" rows="4" placeholder="Write description here..."
            class="block px-3.5 py-2.5 w-full border border-lavender rounded-lg resize-none focus:ring-green/20 focus:border-green/20"
            >The African Mask plant falls into the category of medium care. While it's not the most demanding plant, it does require a bit of attention to thrive. It's not the best choice for beginners, but with some experience and care, you can successfully grow and maintain this striking plant.
            </textarea>
          </div>
          <div class="space-y-2">
            <label for="watering-level" class="text-xl font-brandon-bold block">Watering Level</label>
            <select id="watering-level" class="border border-lavender rounded-lg focus:ring-green/20 focus:border-green/20 block w-full px-3.5 py-2.5">
              <option selected class="text-gray bg-culture hover:bg-green/10">Choose Watering Level</option>
              <option value="Option 1">Option 1</option>
              <option value="Option 2">Option 2</option>
              <option value="Option 3">Option 3</option>
              <option value="Option 4">Option 4</option>
            </select>
            <textarea id="message" rows="4" placeholder="Write description here..."
            class="block px-3.5 py-2.5 w-full border border-lavender rounded-lg resize-none focus:ring-green/20 focus:border-green/20"
            >The African Mask plant falls into the category of medium care. While it's not the most demanding plant, it does require a bit of attention to thrive. It's not the best choice for beginners, but with some experience and care, you can successfully grow and maintain this striking plant.
            </textarea>
          </div>
          <div class="space-y-2">
            <label for="sunlight-level" class="text-xl font-brandon-bold block">Sunlight Level</label>
            <select id="sunlight-level" class="border border-lavender rounded-lg focus:ring-green/20 focus:border-green/20 block w-full px-3.5 py-2.5">
              <option selected class="text-gray bg-culture hover:bg-green/10">Choose Sunlight Level</option>
              <option value="Option 1">Option 1</option>
              <option value="Option 2">Option 2</option>
              <option value="Option 3">Option 3</option>
              <option value="Option 4">Option 4</option>
            </select>
            <textarea id="message" rows="4" placeholder="Write description here..."
            class="block px-3.5 py-2.5 w-full border border-lavender rounded-lg resize-none focus:ring-green/20 focus:border-green/20"
            >The African Mask plant falls into the category of medium care. While it's not the most demanding plant, it does require a bit of attention to thrive. It's not the best choice for beginners, but with some experience and care, you can successfully grow and maintain this striking plant.
            </textarea>
          </div>
          <button class="bg-green text-white py-2 rounded hover:bg-green/90"><a href="{{ route('view-plantinfo') }}" class="py-2 px-5">Save Details</a></button>
        </div>
        <div class="col-span-2 shadow-leftBottom p-5 rounded-md">
          <div class="flex justify-between mb-3">
            <h3 class="text-2xl font-brandon-bold">Plant Details</h3>
            <span class="text-sm bg-orange/20 text-orange uppercase font-brandon-black px-3 py-2 rounded">Inactive</span>
          </div>
          <div class="grid grid-cols-4 gap-x-5 items-start">
            <img src="{{ asset('images/products/plant-sample.webp') }}" class="col-span-1" />
            <div class="grid grid-cols-2 col-span-3 gap-x-5 gap-y-3">
              <div class="text-center font-brandon-bold py-1 bg-culture rounded-lg">Plant Name</div>
              <p class="mt-1">#123456789</p>
              <div class="text-center font-brandon-bold py-1 bg-culture rounded-lg">Listed Price</div>
              <p class="mt-1">500</p>
              <div class="text-center font-brandon-bold py-1 bg-culture rounded-lg">In-Stock Quantity</div>
              <p class="mt-1">100</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endsection
