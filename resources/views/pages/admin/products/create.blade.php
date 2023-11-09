@extends('layout.client.admin')
@section('title', 'Add Product')
@section('content')
<section>
  <div class="flex mb-5">
    <a href="{{ route('admin.products.index') }}"><i class='bx bx-chevron-left me-3 text-5xl text-green-200'></i></a>
    <h1 class="text-4xl font-brandon-bold">Add Product</h1>
  </div>
  <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-4 gap-8 items-start">
    @csrf
    <div class="col-span-2 shadow-leftBottom p-5 rounded-md space-y-3">
      <h3 class="text-2xl font-brandon-bold mb-3">Product Details</h3>
      <div class="grid grid-cols-2 gap-y-1 gap-x-3">
        <div class="col-span-2 flex flex-col">
          <input type="text" name="name" class="rounded-lg border {{ $errors->has('name') ? 'border-red-500' : 'border-lavender' }} px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" 
          value="{{ old('name') }}" placeholder="Product Name">
          <span class="text-sm text-crimson my-1">{{$errors->first('name')}}</span>
        </div>
        <div class="flex flex-col">
          <input type="number" name="quantity" class="rounded-lg border {{ $errors->has('quantity') ? 'border-red-500' : 'border-lavender' }} px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" 
          value="{{ old('quantity') }}" placeholder="In-Stock Quantity">
          <span class="text-sm text-crimson my-1">{{$errors->first('quantity')}}</span>
        </div>
        <div class="flex flex-col">
          <input type="number" name="price" class="rounded-lg border {{ $errors->has('price') ? 'border-red-500' : 'border-lavender' }} px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" 
          value="{{ old('price') }}" placeholder="Listed Price">
          <span class="text-sm text-crimson my-1">{{$errors->first('price')}}</span>
        </div>
        <div class="flex flex-col">
          <select id="category" name="category" class="border {{ $errors->has('category') ? 'border-red-500' : 'border-lavender' }} rounded-lg focus:ring-green-200/20 focus:border-green-200/20 block w-full px-3.5 py-2.5"
          value="{{ old('category') }}">
            <option selected class="text-gray bg-culture hover:bg-green/20">Category</option>
            <option value="Plant">Plant</option>
            <option value="Essential">Essential</option>
          </select>
          <span class="text-sm text-crimson my-1">{{$errors->first('category')}}</span>
        </div>
        <div class="flex flex-col">
          <select id="product-type" name="type" class="border {{ $errors->has('type') ? 'border-red-500' : 'border-lavender' }} rounded-lg focus:ring-green-200/20 focus:border-green-200/20 block w-full px-3.5 py-2.5"
          value="{{ old('type') }}" data-plant-options="Bush,Flowering,Shrub,Succulent,Perennial" data-essential-options="Soil,Pots,Watering Tools,Gardening Tools & Accessories">
            <option selected class="text-gray bg-culture hover:bg-green/20">Type</option>
          </select>
          <span class="text-sm text-crimson my-1">{{$errors->first('type')}}</span>
        </div>
        <div id="scientific" class="col-span-2 flex flex-col">
          <input type="text" name="scientific_name" class="rounded-lg border {{ $errors->has('scientific_name') ? 'border-red-500' : 'border-lavender' }} px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" 
          value="{{ old('scientific_name') }}" placeholder="Scientific Name">
          <span class="text-sm text-crimson my-1">{{$errors->first('scientific_name')}}</span>
        </div>
        <div id="lifespan" class="col-span-2 flex flex-col">
          <input type="text" name="lifespan" class="rounded-lg border {{ $errors->has('lifespan') ? 'border-red-500' : 'border-lavender' }} px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" 
          value="{{ old('lifespan') }}" placeholder="Lifespan (if plants)">
          <span class="text-sm text-crimson my-1">{{$errors->first('lifespan')}}</span>
        </div>
        <div class="col-span-2 flex flex-col">
          <textarea id="message" rows="10" name="description" placeholder="Plant Description" class="block px-3.5 py-2.5 col-span-2 border {{ $errors->has('description') ? 'border-red-500' : 'border-lavender' }} rounded-lg resize-none focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70"
          value="{{ old('description') }}"></textarea>
          <span class="text-sm text-crimson my-1">{{$errors->first('description')}}</span>
        </div>
        <div class="flex flex-col space-y-4">
          <button class="bg-green-200 text-white py-2 rounded hover:bg-green-200/90 w-36">Add Product</button>
        </div>
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
          <input id="dropzone-file" type="file" class="hidden" name="images[]" multiple accept="image/*" />
        </label>
      </div>
      <p class="mt-2">(*.jpg, *.jpeg, *.png) 10MB max, up to 5 Photos <br /> 500x500 pixels recommended</p>
      <span class="text-sm text-crimson my-1">{{$errors->first('images.*')}}</span>
      <div id="image-preview" class="flex flex-wrap gap-4 mt-5"></div>
    </div>
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

      // Loop through the selected files and display previews
      for (var i = 0; i < Math.min(files.length, 5); i++) {
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

  // conditionally change type options based on category selection
  // only show lifespan input field when plant is selected
  $(document).ready(function () {
    var $categorySelect = $('#category');
    var $typeSelect = $('#product-type');
    var $lifespanInput = $('#lifespan');
    var $scientificInput = $('#scientific');

    var plantOptions = $typeSelect.attr('data-plant-options').split(',');
    var essentialOptions = $typeSelect.attr('data-essential-options').split(',');

    $categorySelect.on('change', function () {
      var selectedCategory = $(this).val();

      $typeSelect.empty();

      $typeSelect.append($('<option>', {
        value: "",
        text: 'Type',
        class: 'text-gray-500 bg-culture hover:bg-green-200/20'
      }));

      var options = selectedCategory === 'Plant' ? plantOptions : essentialOptions;
      options.forEach(function (option) {
        $typeSelect.append($('<option>', {
          value: option,
          text: option
        }))
      })

      if (selectedCategory === 'Plant') {
        $lifespanInput.removeClass('hidden');
        $scientificInput.removeClass('hidden');
      } else {
        $lifespanInput.addClass('hidden');
        $scientificInput.addClass('hidden');
      }
    });

    $categorySelect.trigger('change');
  });
</script>

@endsection