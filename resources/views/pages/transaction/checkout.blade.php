@extends('layout.client.front')
@section('title', 'Checkout')
@section('content')

<section>
  <div class="grid grid-cols-8 gap-20">
    <div class="col-span-3">
      <form action="{{ route('create-transaction') }}" method="POST" class="space-y-5">
        @csrf
        @php $q = 0; @endphp
        @foreach($products as $p)
        <input type="hidden" name="items[]" value="{{ $p->id }}">
        <input type="hidden" name="quantity[]" value="{{ $quantity[$q] }}">
        @php $q++; @endphp
        @endforeach
        <div>
          <div class="flex justify-between items-center mb-3">
            <h3 class="text-xl font-brandon-bold">Contact Information</h3>
          </div>
          <input id="contact" type="email" class="block w-full rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" placeholder="Email Address" value="{{ $user->email }}">
        </div>
        <div>
          <h3 class="text-xl font-brandon-bold mb-3">Delivery Information</h3>
          <div class="grid grid-cols-2 gap-3">
            <input id="firstName" type="text" name="first_name"  class="block w-full rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" placeholder="First Name" value="{{ $user->first_name }}">
            <input id="lastName" type="text" name="last_name" class="block w-full rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" placeholder="Last Name" value="{{$user->last_name }}">
            <input id="company" type="text" name="company" class="block w-full col-span-2 rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" placeholder="Company (optional)" value="{{$user->company }}">
            <input id="house" type="text"  name="street_address" class="block w-full col-span-2 rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" placeholder="House Number, Street Name"  value="{{$user->street_address }}">
            <input id="apartment" type="text" name="building_address" class="block w-full col-span-2 rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" placeholder="Apartment, Suite, Unit, etc. (optional)" value="{{$user->building_address }}">
            <select id="city" name="city" type="text" class="block w-full rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" placeholder="City">
              <option>Select City</option>
              <option value="antipolo" shipping="360">Antipolo</option>
              <option value="bacoor" shipping="250">Bacoor</option>
              <option value="caloocan" shipping="360">Caloocan</option>
              <option value="dasmarinas" shipping="250">Dasmariñas</option>
              <option value="imus" shipping="250">Imus</option>
              <option value="las pinas" shipping="170">Las Piñas</option>
              <option value="makati" shipping="220">Makati</option>
              <option value="malabon" shipping="360">Malabon</option>
              <option value="mandalayong" shipping="220">Mandaluyong</option>
              <option value="manila" shipping="300">Manila</option>
              <option value="marikina" shipping="300">Marikina</option>
              <option value="muntinlupa" shipping="170">Muntinlupa</option>
              <option value="paranaque" shipping="170">Parañaque</option>
              <option value="pasay" shipping="220">Pasay</option>
              <option value="pasig" shipping="300">Pasig</option>
              <option value="quezon city" shipping="300">Quezon City</option>
              <option value="san juan" shipping="300">San Juan</option>
              <option value="taguig" shipping="220">Taguig</option>
              <option value="valenzuela" shipping="360">Valenzuela</option>
            </select>
            <input id="zip" name="zip_code" type="number" class="block w-full rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" placeholder="Zip Code"  value="{{$user->zip_code }}">
            <input id="phone" type="number" name="phone" class="block w-full col-span-2 rounded-lg border border-lavender px-3.5 py-2.5 focus:ring-green-200/20 focus:border-green-200/20 placeholder-gray-500/70" placeholder="Phone Number"  value="{{$user->phone }}">
          </div>
        </div>
        <div>
          <div class="mb-3">
            <h3 class="text-xl font-brandon-bold">Shipping Method</h3>
            <p class="text-gray-500">Select what suits your availability the best.</p>
          </div>
          <div id="accordion-open" data-accordion="open">
            <h2 id="same-day">
              <button type="button" class="flex bg-white items-center justify-between w-full p-4 font-medium text-left border border-b-0 border-gray-200 rounded-t-xl focus:ring-4" data-accordion-target="#same-day-desc" aria-expanded="true" aria-controls="same-day-desc" >
                <div class="flex items-center space-x-4">
                  <input id="shipping-radio-1" type="radio" value="same-day" name="shipping" class="w-4 h-4 text-green-200 focus:ring-green-200 dark:focus:ring-green-200 focus:ring-2" checked>
                  <label for="shipping-radio-1" class="w-full ml-2 font-medium text-gray-900 dark:text-gray-300">Same-day Delivery</label>
                </div>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
              </button>
            </h2>
            <div id="same-day-desc" class="hidden" aria-labelledby="same-day">
              <div class="py-5 px-8 bg-gray-400">
                <p>Best for <em>small orders</em> under 10kg.</p>
                <p class="font-brandon-bold">Orders will be accepted until 5:00 PM only; any submission after this time will be processed on the next business day.</p>
                <div class="grid grid-cols-4 mt-4">
                  <div class="col-span-3 py-1 px-3 border-x border-t border-black">Parañaque, Las Piñas, Muntinlupa</div>
                  <div class="text-center py-1 border-r border-t border-black">₱170</div>
                  <div class="col-span-3 py-1 px-3 border-x border-t border-black">Pasay, Makati, Taguig, Mandaluyong</div>
                  <div class="text-center py-1 border-r border-t border-black">₱220</div>
                  <div class="col-span-3 py-1 px-3 border-x border-t border-black">Manila, Pasig, San Juan, Marikina, Quezon City</div>
                  <div class="text-center py-1 border-r border-t border-black">₱300</div>
                  <div class="col-span-3 py-1 px-3 border-x border-t border-black">Malabon, Valenzuela, Caloocan, Antipolo</div>
                  <div class="text-center py-1 border-r border-t border-black">₱360</div>
                  <div class="col-span-3 py-1 px-3 border border-black">Bacoor, Dasmariñas, Imus</div>
                  <div class="text-center py-1 border-r border-y border-black">₱250</div>
                </div>
              </div>
            </div>
            <h2 id="personal">
              <button type="button" class="flex bg-white items-center justify-between w-full p-4 font-medium text-left border border-b-0 border-gray-200 focus:ring-4" data-accordion-target="#personal-desc" aria-expanded="true" aria-controls="personal-desc">
                <div class="flex items-center space-x-4">
                  <input id="shipping-radio-2" type="radio" value="standard" name="shipping" class="w-4 h-4 text-green-200 focus:ring-green-200 dark:focus:ring-green-200 focus:ring-2">
                  <label for="shipping-radio-2" class="w-full ml-2 font-medium text-gray-900 dark:text-gray-300">Personal Delivery</label>
                </div>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
              </button>
            </h2>
            <div id="personal-desc" class="hidden" aria-labelledby="personal">
              <div class="py-5 px-8 bg-gray-400">
                <p>Best for <em>tall plants and big orders.</em></p>
                <p class="font-brandon-bold">Guaranteed 100% safe and secure delivery right to your doorstep every Mondays, Wednesdays, and Fridays.</p>
                <div class="grid grid-cols-4 mt-4">
                  <div class="col-span-3 py-1 px-3 border-x border-t border-black">Parañaque, Las Piñas, Muntinlupa</div>
                  <div class="text-center py-1 border-r border-t border-black">₱170</div>
                  <div class="col-span-3 py-1 px-3 border-x border-t border-black">Pasay, Makati, Taguig, Mandaluyong</div>
                  <div class="text-center py-1 border-r border-t border-black">₱220</div>
                  <div class="col-span-3 py-1 px-3 border-x border-t border-black">Manila, Pasig, San Juan, Marikina, Quezon City</div>
                  <div class="text-center py-1 border-r border-t border-black">₱300</div>
                  <div class="col-span-3 py-1 px-3 border-x border-t border-black">Malabon, Valenzuela, Caloocan, Antipolo</div>
                  <div class="text-center py-1 border-r border-t border-black">₱360</div>
                  <div class="col-span-3 py-1 px-3 border border-black">Bacoor, Dasmariñas, Imus</div>
                  <div class="text-center py-1 border-r border-y border-black">₱250</div>
                </div>
              </div>
            </div>
            <h2 id="pickup">
              <button type="button" class="flex bg-white items-center justify-between w-full p-4 font-medium text-left border border-b-0 border-gray-200 focus:ring-4" data-accordion-target="#pickup-desc" aria-expanded="true" aria-controls="pickup-desc">
                <div class="flex items-center space-x-4">
                  <input id="shipping-radio-3" type="radio" value="pick-up" name="shipping" class="w-4 h-4 text-green-200 focus:ring-green-200 dark:focus:ring-green-200 focus:ring-2">
                  <label for="shipping-radio-3" class="w-full ml-2 font-medium text-gray-900 dark:text-gray-300">Pick-up</label>
                </div>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
              </button>
            </h2>
            <div id="pickup-desc" class="hidden" aria-labelledby="pickup">
              <div class="py-5 px-8 bg-gray-400 space-y-2">
                <p>Personally pick it up or book your own courier.</p>
                <p>Pick up point: Plantita Headquarters, Quezon City, Philippines</p>
                <p class="font-brandon-bold">Orders will be accepted until 5:00 PM only; any submission after this time will be processed on the next business day.</p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="mb-3">
            <h3 class="text-xl font-brandon-bold">Remember Me</h3>
            <p class="text-gray-500">Save your information for faster checkout</p>
          </div>
          <div class="flex items-center pl-4 bg-white space-x-5 rounded-lg border border-lavender">
            <input type="checkbox" name="remember" value="yes" class="w-4 h-4 text-green-200 border-gray-500/50 rounded-full focus:ring-green-200 dark:focus:ring-green-200 focus:ring-2">
            <label for="" class="w-full py-4">Remember Me!</label>
          </div>
        </div>

        <div>
          <div class="mb-3">
            <h3 class="text-xl font-brandon-bold">Payment Method</h3>
            <p class="text-gray-500">Choose your preferred payment method.</p>
          </div>
          <div class="flex items-center pl-4 bg-white space-x-5 rounded-lg border border-lavender">
            <input type="checkbox" name="cash" checked value="true" class="w-4 h-4 text-green-200 border-gray-500/50 rounded-full focus:ring-green-200 dark:focus:ring-green-200 focus:ring-2">
            <label for="" class="w-full py-4">Cash On Delivery</label>
          </div>
        </div>
        <a href="{{ route('checkout') }}"><button class="rounded-md text-lg bg-green-200 p-2 mt-5 w-full text-center text-white hover:bg-green-200/80">Pay Now</button></a>
      </form>
    </div>
    <div class="col-span-5 ml-10">
      <div class="p-10 rounded-lg bg-gray-400">
        <div class="grid grid-cols-5 items-center gap-y-5">
          @php $i = 0; $subtotal = 0; @endphp
          @foreach($products as $p)
          @php $img = explode(', ', $p->image) @endphp
          <img src="/uploads/products/{{ $img[0] }}" class="pe-10 rounded-lg" />
          <div class="col-span-3">
            <p class="font-brandon-bold text-xl">{{ $p->name }}</p>
            <p>Quantity: {{ $quantity[$i] }}</p>
          </div>
          <p class="text-xl text-end">{{ $p->price }}</p>
          @php $subtotal += ($p->price * $quantity[$i]); $i++;@endphp
          @endforeach
          <div class="col-span-5 grid grid-cols-2 text-lg">
            <p>Subtotal</p>
            <p class="font-brandon-bold text-end">₱{{ $subtotal }}</p>
            <p>Shipping</p>
            <p class="text-gray-500 text-end">Enter Shipping Address</p>
          </div>
          <div class="flex justify-between col-span-5 text-xl">
            <p class="font-brandon-bold">Total</p>
            <p class="font-brandon-bold" id="total">₱{{ $subtotal }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#city').on('change', function() {
        var selectedShippingCost = parseFloat($('option:selected', this).attr('shipping'));

        var subtotal = parseFloat('{{ $subtotal }}');

        var total = subtotal + selectedShippingCost;

        $('.text-gray-500').text('Shipping: ₱' + selectedShippingCost);
        $('.font-brandon-bold.text-end').first().text('₱' + subtotal.toFixed(2));
        $('#total').text('₱' + total.toFixed(2));
      });
    });
  </script>
</section>

@endsection