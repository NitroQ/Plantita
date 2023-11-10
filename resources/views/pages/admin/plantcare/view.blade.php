@extends('layout.client.admin')
  @section('title', 'Edit Info')
  @section('content')
    <section>
      <div class="flex mb-5">
          <a href="{{ route('admin.plantcare.index') }}"><i class='bx bx-chevron-left me-3 text-5xl text-green-200'></i></a>
          <h1 class="text-4xl font-brandon-bold">{{ $product->name }}</h1>
      </div>
      <div class="grid grid-cols-4 gap-8 items-start">
        <form action="{{ route('admin.plantcare.update',[$product->id]) }}" method="POST" class="col-span-5 lg:col-span-2 shadow-leftBottom p-5 rounded-md space-y-3">
          @csrf
          <h3 class="text-2xl font-brandon-bold mb-3">Plant Care Information</h3>
          <div class="space-y-2">
            <label for="care-level" class="text-xl font-brandon-bold block">Care Level</label>
            <select disabled name="care_level" id="care-level" class="border {{ $errors->has('care_level') ? 'border-red-500' : 'border-lavender' }} rounded-lg focus:ring-green-200/20 focus:border-green-200/20 block w-full px-3.5 py-2.5">
              <option class="text-gray bg-gray-400 hover:bg-green-200/10">Choose Care Level</option>
              <option {{ $product->care_level == "Low" ? 'selected' : '' }} value="Low">Low</option>
              <option {{ $product->care_level == "Moderate" ? 'selected' : '' }} value="Moderate">Moderate</option>
              <option {{ $product->care_level == "High" ? 'selected' : '' }} value="High">High</option>
            </select>
            <span class="text-sm text-crimson my-1">{{$errors->first('care_level')}}</span>
            <textarea disabled name="care_description" id="message" rows="4" placeholder="Write description here..."
            class="block px-3.5 py-2.5 w-full border {{ $errors->has('care_description') ? 'border-red-500' : 'border-lavender' }} rounded-lg resize-none  focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70"
            >{{ $product->care_description }}</textarea>
            <span class="text-sm text-crimson my-1">{{$errors->first('care_description')}}</span>
          </div>
          <div class="space-y-2">
            <label for="watering-level" class="text-xl font-brandon-bold block">Watering Level</label>
            <select disabled name="watering_level" id="watering-level" class="border {{ $errors->has('watering_level') ? 'border-red-500' : 'border-lavender' }} rounded-lg focus:ring-green-200/20 focus:border-green-200/20 block w-full px-3.5 py-2.5">
              <option class="text-gray bg-gray-400 hover:bg-green-200/10">Choose Watering Level</option>
              <option {{ $product->watering_level == "Low" ? 'selected' : '' }} value="Low">Low</option>
              <option {{ $product->watering_level == "Moderate" ? 'selected' : '' }} value="Moderate">Moderate</option>
              <option {{ $product->watering_level == "High" ? 'selected' : '' }} value="High">High</option>
            </select>
            <span class="text-sm text-crimson my-1">{{$errors->first('watering_level')}}</span>
            <textarea disabled id="message" name="watering_description"  rows="4" placeholder="Write description here..."
            class="block px-3.5 py-2.5 w-full border {{ $errors->has('watering_description') ? 'border-red-500' : 'border-lavender' }} rounded-lg resize-none focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70"
            >{{ $product->watering_description }}</textarea>
            <span class="text-sm text-crimson my-1">{{$errors->first('watering_description')}}</span>
          </div>
          <div class="space-y-2">
            <label for="sunlight-level" class="text-xl font-brandon-bold block">Sunlight Level</label>
            <select disabled name="sun_level" id="sunlight-level" class="border {{ $errors->has('sun_level') ? 'border-red-500' : 'border-lavender' }} rounded-lg focus:ring-green-200/20 focus:border-green-200/20 block w-full px-3.5 py-2.5">
              <option class="text-gray bg-gray-400 hover:bg-green-200/10">Choose Sunlight Level</option>
              <option {{ $product->sun_level == "Low" ? 'selected' : '' }} value="Low">Low</option>
              <option {{ $product->sun_level == "Moderate" ? 'selected' : '' }}  value="Moderate">Moderate</option>
              <option {{ $product->sun_level == "High" ? 'selected' : '' }}  value="High">High</option>
            </select>
            <span class="text-sm text-crimson my-1">{{$errors->first('sun_level')}}</span>
            <textarea disabled id="message" name="sun_description"  rows="4" placeholder="Write description here..."
            class="block px-3.5 py-2.5 w-full border {{ $errors->has('sun_description') ? 'border-red-500' : 'border-lavender' }} rounded-lg resize-none focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70"
            >{{ $product->sun_description }}</textarea>
            <span class="text-sm text-crimson my-1">{{$errors->first('sun_description')}}</span>
          </div>
          <button type="button" class="bg-green-200 text-white py-2 rounded hover:bg-green-200/90 w-36"><a href="{{ route('admin.plantcare.edit',[$product->id]) }}">Edit Details</a></button>
        </form>
        <div class="col-span-5 lg:col-span-2 order-first lg:order-last shadow-leftBottom p-5 rounded-md">
          <div class="flex justify-between mb-3">
            <h3 class="text-2xl font-brandon-bold">Plant Details</h3>
            <span class="text-sm bg-orange/20 text-orange uppercase font-brandon-black px-3 py-2 rounded">Inactive</span>
          </div>
          <div class="grid grid-cols-4 gap-x-5 items-start">
            @php $img = explode(', ', $product->image) @endphp
            <img src="/uploads/products/{{ $img[0] }}" class="col-span-1 object-cover rounded h-32 w-full" />
            <div class="grid grid-cols-2 col-span-3 gap-x-5 gap-y-3">
              <div class="text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">Plant Name</div>
              <p class="mt-1">{{ $product->name }}</p>
              <div class="text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">Listed Price</div>
              <p class="mt-1">{{ $product->price }}</p>
              <div class="text-center font-brandon-bold py-1 bg-gray-400 rounded-lg">In-Stock Quantity</div>
              <p class="mt-1">{{ $product->quantity }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endsection
