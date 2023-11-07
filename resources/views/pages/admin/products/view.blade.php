@extends('layout.client.admin')
@section('title', 'View Product')
@section('content')
  <section>
    <div class="flex mb-5">
      <a href="{{ route('admin.products.index') }}"><i class='bx bx-chevron-left me-3 text-5xl text-green-200'></i></a>
      <h1 class="text-4xl font-brandon-bold">{{ $product->name }}</h1>
    </div>
    <div class="grid grid-cols-4 gap-8 items-start">
      <div class="col-span-2 shadow-leftBottom p-5 rounded-md space-y-3">
        <h3 class="text-2xl font-brandon-bold mb-3">Product Details</h3>
        <form action="" class="grid grid-cols-2 gap-3">
          <input type="text" value="{{ $product->name }}"
            class="col-span-2 rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20"
            placeholder="Product Name" disabled>
          <input type="text" value="100"
            class="rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20"
            placeholder="In-Stock Quantity" value="{{ $product->quantity }}" disabled>
          <input type="text" value="500"
            class="rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20"
            placeholder="Listed Price" value="{{ $product->price }}" disabled>
          <input type="text" value="{{ $product->scientific_name }}"
            class="col-span-2 rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20"
            placeholder="Scientific Name" disabled>
          <select id="product-type"
            class="border border-lavender rounded-lg focus:ring-green-200/20 focus:border-green-200/20 block w-full px-3.5 py-2.5"
            disabled>
            <option class="text-gray bg-gray-400 hover:bg-green-200/20">Type</option>
            <option selected value="Plants">Plants</option>
            <option value="Option 2">Option 2</option>
            <option value="Option 3">Option 3</option>
            <option value="Option 4">Option 4</option>
          </select>
          <input type="text" value="{{ $product->lifespan }}"
            class="rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20"
            placeholder="Lifespan (if plants)" disabled>
          <textarea id="message" rows="10" placeholder="Plant Description"
            class="block px-3.5 py-2.5 col-span-2 border border-lavender rounded-lg resize-none focus:ring-green-200/20 focus:border-green-200/20"
            disabled>{{ $product->description }}</textarea>
        </form>
        <button class="bg-green-200 text-white py-2 rounded hover:bg-green-200/90"><a href="{{ route('admin.products.edit',[$product->id]) }}"
            class="py-2 px-5">Edit Details</a></button>
      </div>
      <div class="col-span-2 shadow-leftBottom p-5 rounded-md">
        <h3 class="text-2xl font-brandon-bold mb-3">Product Images</h3>
        <div class="flex items-center justify-center w-full">
          <label for="dropzone-file"
            class="flex flex-col items-center justify-center w-full border-2 border-lavender border-dashed rounded-lg cursor-pointer">
            <div class="flex flex-col items-center justify-center pt-5 pb-6">
              <div class="flex items-center">
                <i class='bx bx-cloud-upload text-2xl me-3'></i>
                <p class="text-center">Drag and Drop here</p>
              </div>
              <p>or</p>
              <label for="select-files"
                class="mt-2 bg-green-200 text-sm text-white py-2 px-5 rounded hover:bg-green-200/90 cursor-pointer">
                Select Files
                <input id="select-files" type="file" class="hidden" />
              </label>
            </div>
            <input id="dropzone-file" type="file" class="hidden" />
          </label>
        </div>
        <p class="mt-2">(*.jpg, *.jpeg, *.png) 10MB max, up to 5 Photos <br /> 500x500 pixels recommended</p>
      </div>
    </div>
  </section>
@endsection
