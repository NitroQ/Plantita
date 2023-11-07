@extends('layout.client.admin')
@section('title', 'Add Product')
@section('content')
<section>
  <div class="flex mb-5">
    <a href="{{ route('admin.products.index') }}"><i class='bx bx-chevron-left me-3 text-5xl text-green'></i></a>
    <h1 class="text-4xl font-brandon-bold">Add Product</h1>
  </div>
  <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-4 gap-8 items-start">
   {{ csrf_field() }}
    <div class="col-span-2 shadow-leftBottom p-5 rounded-md space-y-3">
      <h3 class="text-2xl font-brandon-bold mb-3">Product Details</h3>
      <div class="grid grid-cols-2 gap-3">
        <input type="text" name="name" class="col-span-2 rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green/20 focus:border-green/20" placeholder="Product Name">
        
        <input type="number" name="quantity" class="rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green/20 focus:border-green/20" placeholder="In-Stock Quantity">
        <input type="number" name="price" class="rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green/20 focus:border-green/20" placeholder="Listed Price">
        <input type="text" name="scientific_name" class="col-span-2 rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green/20 focus:border-green/20" placeholder="Scientific Name">
        <select id="product-type" name="category" class="border border-culture rounded-lg focus:ring-green/20 focus:border-green/20 block w-full px-3.5 py-2.5">
          <option selected class="text-gray bg-culture hover:bg-green/20">Category</option>
          <option value="plant">Plant</option>
          <option value="essential">Essential</option>
        </select>
        <input type="text" name="lifespan" class="rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green/20 focus:border-green/20" placeholder="Lifespan (if plants)">
        <textarea id="message" rows="10"  name="description"  placeholder="Plant Description" class="block px-3.5 py-2.5 col-span-2 border border-culture rounded-lg resize-none focus:ring-green/20 focus:border-green/20"></textarea>
        <button class="bg-green text-white py-2 rounded hover:bg-green/90">Add Product</button>
      
      </div>
    </div>
    <div class="col-span-2 shadow-leftBottom p-5 rounded-md">
      <h3 class="text-2xl font-brandon-bold mb-3">Product Images</h3>
      <div class="flex items-center justify-center w-full">
        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full border-2 border-lavender border-dashed rounded-lg cursor-pointer">
          <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <div class="flex items-center">
              <i class='bx bx-cloud-upload text-2xl me-3'></i>
              <p class="text-center">Drag and Drop here</p>
            </div>
            <p>or</p>
            <p  class="mt-2 bg-green text-sm text-white py-2 px-5 rounded hover:bg-green/90 cursor-pointer">Select Files</p>
          </div>
          <input id="dropzone-file" name="image" type="file" class="hidden" />
        </label>
      </div>
      <p class="mt-2">(*.jpg, *.jpeg, *.png) 10MB max, up to 5 Photos <br /> 500x500 pixels recommended</p>
    </div>
    <span class="text-red-900">{{$errors->first('name')}}</span>
    <span class="text-red-900">{{$errors->first('quantity')}}</span>
    <span class="text-red-900">{{$errors->first('price')}}</span>
    <span class="text-red-900">{{$errors->first('scientific_name')}}</span>
    <span class="text-red-900">{{$errors->first('category')}}</span>
    <span class="text-red-900">{{$errors->first('lifespan')}}</span>
    <span class="text-red-900">{{$errors->first('description')}}</span>
    <span class="text-red-900">{{$errors->first('image')}}</span>
  </form>
</section>
@endsection