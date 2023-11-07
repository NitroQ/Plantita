@extends('layout.client.admin')
@section('title', 'View Product')
@section('content')
  <section>
    <div class="flex mb-5">
      <a href="{{ route('products') }}"><i class='bx bx-chevron-left me-3 text-5xl text-green'></i></a>
      <h1 class="text-4xl font-brandon-bold">African Mask</h1>
    </div>
    <div class="grid grid-cols-4 gap-8 items-start">
      <div class="col-span-2 shadow-leftBottom p-5 rounded-md space-y-3">
        <h3 class="text-2xl font-brandon-bold mb-3">Product Details</h3>
        <form action="" class="grid grid-cols-2 gap-3">
          <input type="text" value="African Mask"
            class="col-span-2 rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green/20 focus:border-green/20"
            placeholder="Product Name" disabled>
          <input type="text" value="100"
            class="rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green/20 focus:border-green/20"
            placeholder="In-Stock Quantity" disabled>
          <input type="text" value="500"
            class="rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green/20 focus:border-green/20"
            placeholder="Listed Price" disabled>
          <input type="text" value="Alocasia Polly"
            class="col-span-2 rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green/20 focus:border-green/20"
            placeholder="Scientific Name" disabled>
          <select id="product-type"
            class="border border-lavender rounded-lg focus:ring-green/20 focus:border-green/20 block w-full px-3.5 py-2.5"
            disabled>
            <option class="text-gray bg-culture hover:bg-green/20">Type</option>
            <option selected value="Plants">Plants</option>
            <option value="Option 2">Option 2</option>
            <option value="Option 3">Option 3</option>
            <option value="Option 4">Option 4</option>
          </select>
          <input type="text" value="Approximately 5 years"
            class="rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green/20 focus:border-green/20"
            placeholder="Lifespan (if plants)" disabled>
          <textarea id="message" rows="10" placeholder="Plant Description"
            class="block px-3.5 py-2.5 col-span-2 border border-lavender rounded-lg resize-none focus:ring-green/20 focus:border-green/20"
            disabled>The African Mask plant, with its striking arrowhead-shaped leaves, adds a touch of exotic elegance to any space. Known for its unique pattern resembling an African tribal mask, this plant is a stunning choice for plant enthusiasts and interior décor enthusiasts alike.
        </textarea>
        </form>
        <button class="bg-green text-white py-2 rounded hover:bg-green/90"><a href="{{ route('edit-product') }}"
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
                class="mt-2 bg-green text-sm text-white py-2 px-5 rounded hover:bg-green/90 cursor-pointer">
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
