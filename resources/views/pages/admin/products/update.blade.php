@extends('layout.client.admin')
@section('title', 'Edit Product')
@section('content')
<section>
  <div class="flex mb-5">
    <a href="{{ route('admin.products.index') }}"><i class='bx bx-chevron-left me-3 text-5xl text-green-200'></i></a>
    <h1 class="text-4xl font-brandon-bold">Edit Product</h1>
  </div>
  <form action="{{ route('admin.products.update',[$product->id]) }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-4 gap-8 items-start">
   @csrf
    <div class="col-span-2 shadow-leftBottom p-5 rounded-md space-y-3">
      <h3 class="text-2xl font-brandon-bold mb-3">Product Details</h3>
      <div class="grid grid-cols-2 gap-3">
        <input type="text" name="name" class="col-span-2 rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" placeholder="Product Name" value="{{ $product->name }}">
        <input type="number" name="quantity" class="rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" placeholder="In-Stock Quantity" value="{{ $product->quantity }}">
        <input type="number" name="price" class="rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" placeholder="Listed Price" value="{{ $product->price }}">
        <input type="text" name="scientific_name" class="col-span-2 rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" placeholder="Scientific Name" value="{{ $product->scientific_name }}">
        <select id="product-type" name="category"  class="border border-gray-400 rounded-lg focus:ring-green-200/20 focus:border-green-200/20 block w-full px-3.5 py-2.5">
          <option selected class="text-gray bg-culture hover:bg-green/20">Category</option>
          <option {{ $product->category == "Plant" ? 'selected' : '' }} value="Plant">Plant</option>
          <option {{ $product->category == "Essential" ? 'selected' : '' }} value="Essential">Essential</option>
        </select>
        <select id="product-type" name="type"  class="border border-gray-400 rounded-lg focus:ring-green-200/20 focus:border-green-200/20 block w-full px-3.5 py-2.5">
          <option selected class="text-gray bg-culture hover:bg-green/20">Type</option>
          <option {{ $product->type == "Bush" ? 'selected' : '' }} value="Bush">Bush</option>
          <option {{ $product->type == "Flowering" ? 'selected' : '' }} value="Flowering">Flowering</option>
          <option {{ $product->type == "Shrub" ? 'selected' : '' }} value="Shrub">Shrub</option>
          <option {{ $product->type == "Succulent" ? 'selected' : '' }} value="Succulent">Succulent</option>
          <option {{ $product->type == "Perennial" ? 'selected' : '' }} value="Perennial">Perennial</option>
        </select>
        <input type="text" name="lifespan" class="rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" placeholder="Lifespan (if plants)" value="{{ $product->lifespan }}">
        <textarea id="message" rows="10"  name="description"  placeholder="Plant Description" class="block px-3.5 py-2.5 col-span-2 border border-gray-400 rounded-lg resize-none focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70">{{ $product->description }}</textarea>
        <button class="bg-green-200 text-white py-2 rounded hover:bg-green-200/90 w-36">Update Product</button>
      
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
            <p class="mt-2 bg-green-200 text-sm text-white py-2 px-5 rounded hover:bg-green-200/90 cursor-pointer">Select Files</p>
          </div>
          <input id="dropzone-file" type="file" class="hidden" name="images[]" multiple accept="image/*"/>
        </label>
      </div>
      <p class="mt-2">(*.jpg, *.jpeg, *.png) 10MB max, up to 5 Photos <br /> 500x500 pixels recommended</p>
      <div id="image-preview" class="flex flex-wrap gap-5 mt-5"></div>
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

@section('script')
<script>
  $(document).ready(function() {
      // Watch for changes in the file input field
      $('#dropzone-file').on('change', function(event) {
          // Clear the existing previews
          $('#image-preview').empty();
  
          // Get the selected files
          var files = event.target.files;

          console.log('hello')
  
          // Loop through the selected files and display previews
          for (var i = 0; i < files.length; i++) {
              var reader = new FileReader();
              // Read the file as a data URL
              reader.readAsDataURL(files[i]);
              // When the reader has loaded the file, create a preview element
              reader.onload = function(e) {
                  // Create an image element for the preview
                  var image = $('<img>').attr('src', e.target.result);
                  image.addClass('w-28 h-28 object-cover rounded');
                  
                  // Append the image preview to the #image-preview div
                  $('#image-preview').append(image);
              };
          }
      });
  });
  </script>

  @endsection