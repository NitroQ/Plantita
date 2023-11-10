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
        <select name="care_level" id="care-level" class="border {{ $errors->has('care_level') ? 'border-red-500' : 'border-lavender' }} rounded-lg focus:ring-green-200/20 focus:border-green-200/20 block w-full px-3.5 py-2.5">
          <option value="" {{ (old('care_level') == '' && !$errors->has('care_level')) ? 'selected' : '' }} class="text-gray bg-gray-400 hover:bg-green-200/10">Choose Care Level</option>
          <option value="Low" {{ (old('care_level') == 'Low' || $product->care_level == 'Low') ? 'selected' : '' }}>Low</option>
          <option value="Moderate" {{ (old('care_level') == 'Moderate' || $product->care_level == 'Moderate') ? 'selected' : '' }}>Moderate</option>
          <option value="High" {{ (old('care_level') == 'High' || $product->care_level == 'High') ? 'selected' : '' }}>High</option>
        </select>
        <span class="text-sm text-crimson my-1">{{$errors->first('care_level')}}</span>
        <textarea name="care_description" id="message" rows="4" placeholder="Write description here..." class="block px-3.5 py-2.5 w-full border {{ $errors->has('care_description') ? 'border-red-500' : 'border-lavender' }} rounded-lg resize-none  focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70">{{ $product->care_description != '' ? $product->care_description  : old('care_description') }}</textarea>
        <span class="text-sm text-crimson my-1">{{$errors->first('care_description')}}</span>
      </div>
      <div class="space-y-2">
        <label for="watering-level" class="text-xl font-brandon-bold block">Watering Level</label>
        <select name="watering_level" id="watering-level" class="border {{ $errors->has('watering_level') ? 'border-red-500' : 'border-lavender' }} rounded-lg focus:ring-green-200/20 focus:border-green-200/20 block w-full px-3.5 py-2.5">
          <option selected {{ (old('watering_level') == '' && !$errors->has('watering_level')) ? 'selected' : '' }} class="text-gray bg-gray-400 hover:bg-green-200/10">Choose Watering Level</option>
          <option value="Low" {{ (old('watering_level') == 'Low' || $product->watering_level == 'Low') ? 'selected' : '' }}>Low</option>
          <option value="Moderate" {{ (old('watering_level') == 'Moderate' || $product->watering_level == 'Moderate') ? 'selected' : '' }}>Moderate</option>
          <option value="High" {{ (old('watering_level') == 'High' || $product->watering_level == 'High') ? 'selected' : '' }}>High</option>
        </select>
        <span class="text-sm text-crimson my-1">{{$errors->first('watering_level')}}</span>
        <textarea id="message" name="watering_description" rows="4" placeholder="Write description here..." class="block px-3.5 py-2.5 w-full border {{ $errors->has('watering_description') ? 'border-red-500' : 'border-lavender' }} rounded-lg resize-none focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70">{{ $product->watering_description != '' ? $product->watering_description  : old('watering_description') }}</textarea>
        <span class="text-sm text-crimson my-1">{{$errors->first('watering_description')}}</span>
      </div>
      <div class="space-y-2">
        <label for="sunlight-level" class="text-xl font-brandon-bold block">Sunlight Level</label>
        <select name="sun_level" id="sunlight-level" class="border {{ $errors->has('sun_level') ? 'border-red-500' : 'border-lavender' }} rounded-lg focus:ring-green-200/20 focus:border-green-200/20 block w-full px-3.5 py-2.5">
          <option selected {{ (old('sun_level') == '' && !$errors->has('sun_level')) ? 'selected' : '' }} class="text-gray bg-gray-400 hover:bg-green-200/10">Choose Sunlight Level</option>
          <option value="Low" {{ (old('sun_level') == 'Low' || $product->sun_level == 'Low') ? 'selected' : '' }}>Low</option>
          <option value="Moderate" {{ (old('sun_level') == 'Moderate' || $product->sun_level == 'Moderate') ? 'selected' : '' }}>Moderate</option>
          <option value="High" {{ (old('sun_level') == 'High' || $product->sun_level == 'High') ? 'selected' : '' }}>High</option>
        </select>
        <span class="text-sm text-crimson my-1">{{$errors->first('sun_level')}}</span>
        <textarea id="message" name="sun_description" rows="4" placeholder="Write description here..." class="block px-3.5 py-2.5 w-full border {{ $errors->has('sun_description') ? 'border-red-500' : 'border-lavender' }} rounded-lg resize-none focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70">{{ $product->sun_description != '' ? $product->sun_description  : old('sun_description') }}</textarea>
        <span class="text-sm text-crimson my-1">{{$errors->first('sun_description')}}</span>
      </div>
      <button type="submit" class="bg-green-200 text-white py-2 rounded hover:bg-green-200/90 w-36">Save Details</button>
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