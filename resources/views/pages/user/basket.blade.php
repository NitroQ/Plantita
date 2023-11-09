@extends('layout.client.front')
@section('title', 'Basket')
@section('content')

<section>
  <p class="text-gray-500/70">Plants / Basket</p>
  <div class="flex justify-between mb-5">
    <h3 class="text-4xl font-brandon-bold leading">Your Basket</h3>
    {{-- <div class="flex items-center space-x-8">
      <div class="text-end">
        <p class="text-gray-500 leading-4">Subtotal</p>
        <p class="font-brandon-black text-xl">₱<span>2,000</span></p>
      </div>
      <a href="{{ route('checkout') }}"><button class="rounded-md text-lg bg-green-200 p-2 mb-2 w-32 text-center text-white hover:bg-green-200/80">Checkout</button></a>
    </div> --}}
  </div>
  <div class="card shadow-bottom bg-white">
    <div class="relative overflow-x-auto">
      <table class="w-full text-sm text-left text-gray-500">
        <thead class="">
          <tr class="font-medium">
            <th scope="col" class="w-2/5 px-6 py-3 space-x-5">
            <span>All Products</span>
            </th>
            <th scope="col" class="px-6 py-3 whitespace-nowrap">
              Product Price
            </th>
            <th scope="col" class="px-6 py-3 whitespace-nowrap">
              Product Quantity
            </th>
            <th scope="col" class="px-6 py-3 whitespace-nowrap">
              Total Price
            </th>
            <th scope="col" class="px-6 py-3">
              Actions
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white">
            <th scope="row" colspan="6" class="px-6 py-4 whitespace-nowrap space-x-5 bg-gray-400">
              <span class="">Plants</span>
            </th>
          </tr>
         @foreach($cartItems as $item)
            @php
            $product = $products->where('id', $item->id)->first(); // Find product details based on item ID
            @endphp
         <tr class="bg-white text-black border-b">
          <td class="px-6 py-4 flex items-center">
            <input type="checkbox" class="checkbox w-4 h-4 text-green-200 border-gray-500/50 rounded focus:ring-green-200 dark:focus:ring-green-200 focus:ring-2" data-row-id="{{ $item->id }}">
            @php $img = explode(',', $product->image) @endphp
            <img src="/uploads/products/{{ $img[0] }}" class="h-28 w-28 object-cover mx-5 rounded-lg" />
            <div>
              <h4 class="text-2xl font-brandon-bold">{{ $product->name }}</h4>
              <p class="text-gray-500/70 w-3/5 max-h-20 overflow-hidden line-clamp-2">{{ $product->description }}</p>
            </div>
          </td>
          <td class="px-6 py-4 font-brandon-bold text-xl">₱<span id="price-{{ $item->id }}">{{ $product->price }}</span></td>
          <td class="px-6 py-4 text-xl flex space-x-5 items-center">
            <button class="h-8 w-8 bg-gray-500/20 rounded-full hover:bg-green-100 minus" data-row-id="{{ $item->id }}"><i class='bx bx-minus mt-1.5'></i></button>
            <span class="quantity" id="quantity-{{ $item->id }}">{{ $item->quantity }}</span>
            <button class="h-8 w-8 bg-gray-500/20 rounded-full hover:bg-green-100 plus" data-row-id="{{ $item->id }}"><i class='bx bx-plus mt-1.5'></i></button>
          </td>
          <td class="px-6 py-4 font-brandon-bold text-xl">₱<span>{{ \Cart::get($item->id)->getPriceSum() }}</span></td>
          <td class="px-6 py-4 text-xl">
            <button class="remove-btn h-8 w-8 bg-gray-500/20 rounded-full hover:bg-green-100" data-row-id="{{ $item->id }}"><i class='bx bx-x mt-1.5'></i></button>
          </td>
        </tr>
         @endforeach
        
        </tbody>
      </table>
    </div>
  </div>
  <div class="flex justify-between mt-10">
    <div>
      <h3 class="text-2xl font-brandon-bold leading">Subtotal</h3>
      <p>Shipping & Taxes calculated at <em>checkout</em></p>
    </div>
    <div class="flex items-center space-x-8">
      <div class="text-end">
        <p class="text-gray-500 leading-4">Subtotal</p>
        <p class="font-brandon-black text-xl" >₱<span id="subtotal-amount">0</span></p>
      </div>
      <button id="checkout-btn" class="rounded-md text-lg bg-green-200 p-2 mb-2 w-32 text-center text-white hover:bg-green-200/80">Checkout</button>
    </div>
  </div>
</section>

@endsection

@section('script')
<script>
    $(document).ready(function() {

          $('.checkbox').change(function() {
            var total = 0;
            $('.checkbox:checked').each(function() {
                var rowId = $(this).data('row-id');
                var quantity = parseInt($('#quantity-' + rowId).text()); // Get the quantity of the item
                var price = parseFloat($('#price-' + rowId).text()); // Get the price of the item
                var subtotal = quantity * price;
                total += subtotal;
            });

            updateSubtotal(total);
        });

        function updateSubtotal(subtotal) {
            $('#subtotal-amount').text(subtotal.toFixed(2)); // Format the subtotal amount with 2 decimal places
        }

        $('.plus').click(function() {
            var rowId = $(this).data('row-id');
            var quantityElement = $(this).siblings('.quantity');
            var quantity = parseInt(quantityElement.text()) + 1;

            quantityElement.text(quantity);

            updateCartItemQuantity(rowId, quantity);
        });

        $('.minus').click(function() {
            var rowId = $(this).data('row-id');
            var quantityElement = $(this).siblings('.quantity');
            var quantity = parseInt(quantityElement.text()) - 1;

            if (quantity >= 1) {
                quantityElement.text(quantity);

                updateCartItemQuantity(rowId, quantity);
            }
        });


        function updateCartItemQuantity(rowId, quantity) {
            $.ajax({
                type: 'POST',
                url: "{{ route('update-cart') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    rowId: rowId,
                    quantity: quantity
                },
                success: function(response) {
                  alert(response.message);
                },
                error: function(error) {
                  alert(error.message);
                }
            });
        }

        $('.remove-btn').click(function() {
            var rowId = $(this).data('row-id');
            var rowElement = $(this).closest('tr');

            $.ajax({
                type: 'POST',
                url: "{{ route('remove-cart') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    rowId: rowId
                },
                success: function(response) {
                  rowElement.remove();
                  alert(response.message);
                },
                error: function(error) {
                  console.log(error)
                  alert(error.message);
                }
            });
        });

        function gatherCheckedItems() {
          var checkedItems = [];

          $('.checkbox:checked').each(function() {
              var rowId = $(this).data('row-id');
              var quantityText = $('#quantity-'+ rowId).text().trim(); // Retrieve and trim the quantity text
              var quantity = parseInt(quantityText); // Parse the quantity text to an integer

              checkedItems.push({
                  id: rowId,
                  quantity: quantity
              });
          });

          return checkedItems;
      }

      $('#checkout-btn').click(function() {
          var checkedItems = gatherCheckedItems();

          var form = $('<form>', {
              'action': '{{ route("checkout") }}',
              'method': 'POST',
              'style': 'display:none;'
          }).appendTo('body');

          $('<input>', {
              'type': 'hidden',
              'name': '_token',
              'value': '{{ csrf_token() }}'
          }).appendTo(form);

          for (var i = 0; i < checkedItems.length; i++) {
              $('<input>', {
                  'type': 'hidden',
                  'name': 'items[]', 
                  'value': checkedItems[i].id
              }).appendTo(form);
              $('<input>', {
                  'type': 'hidden',
                  'name': 'quantity[]', 
                  'value': checkedItems[i].quantity
              }).appendTo(form);
          }

          form.submit();
      });

    });
</script>

@endsection