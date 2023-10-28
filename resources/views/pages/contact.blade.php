@extends('layout.client.front')
@section('title', 'Contact')
@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 h-full w-full py-0">
  <div class="sm:block relative">
    <img class="w-full h-full object-cover" src="{{ asset('images/other/contact-cover.webp') }}" alt="watering can and plant">
    <div class="absolute inset-0 bg-light-green-pattern-full opacity-100 flex flex-col items-center justify-center px-5">
      <div class="grid grid-cols-1 items-start mb-6">
        <h2 class="font-brandon-black text-white text-5xl">Contact Information</h2>
        <h4 class="font-brandon-regular text-white text-xl">Refer to our Contact Details given below:</h4>
        <div class="grid grid-rows-1 mt-2">
          {{-- PHONE NUMBER --}}
          <div class="grid grid-cols-6 items-center">
            <div class="col-span-1">
              <div class="flex items-start">
                <i class='bx bxs-phone text-white text-5xl'></i>
              </div>
            </div>
            <div class="col-span-4">
              <div class="flex flex-col">
                <h4 class="font-brandon-regular text-white text-lg m-0">(+63) 923 456 7891</h4>
                <h4 class="font-brandon-regular text-white text-lg m-0">+1010 1234 167</h4>
              </div>
            </div>
          </div>
        </div>
        {{-- EMAIL --}}
        <div class="grid grid-rows-1 mt-2">
          <div class="grid grid-cols-6 items-center">
            <div class="col-span-1">
              <div class="flex items-start">
                <i class='bx bxs-envelope text-white text-5xl'></i>
              </div>
            </div>
            <div class="col-span-5">
              <div class="flex flex-col">
                <h4 class="font-brandon-regular text-white text-lg m-0">plantitacommerce@gmail.com</h4>
                <h4 class="font-brandon-regular text-white text-lg m-0">plantitamarketing@gmail.com</h4>
              </div>
            </div>
          </div>
        </div>
        {{-- LOCATION  --}}
        <div class="grid grid-rows-1 mt-2">
          <div class="grid grid-cols-6 items-center">
            <div class="col-span-1">
              <div class="flex items-start">
                <img class="h-10 w-10" src="{{ asset('images/icons_logos/location-icon.svg') }}" alt="">
              </div>
            </div>
            <div class="col-span-5">
              <div class="flex flex-col">
                <h4 class="font-brandon-regular text-white text-lg m-0">555 Lakandula Street, Santa Cruz, Manila</h4>
                <h4 class="font-brandon-regular text-white text-lg m-0">1234 Metro Manila, Philippines</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sm:flex flex-col justify-center">
    {{-- CONTACT FORM --}}
    <form class="max-w-[500px] w-full mx-auto p-8 px-8">
      <h2 class="font-brandon-black text-green italic text-6xl">Got Questions?</h2>
      <h4 class="font-brandon-regular text-gray font-normal text-xl mt-2 mb-6">We're all ears - and leaves! Contact us today</h4>
      <div class="grid gap-2 mb-2 md:grid-cols-2">
        <div>
          <input type="text" id="first_name" class="bg-white border-none rounded-lg focus:ring-green focus:border-green block w-full p-2.5" placeholder="First Name" required>
        </div>
        <div>
          <input type="text" id="last_name" class="bg-white border-none rounded-lg focus:ring-green focus:border-green block w-full p-2.5" placeholder="Last Name" required>
        </div>
      </div>
      <div class="mb-2">
        <input type="email" id="email" class="bg-white border-none rounded-lg focus:ring-green focus:border-green block w-full p-2.5" placeholder="Email Address" required>
      </div>
      <div class="mb-2">
        <input type="text" id="subject" class="bg-white border-none rounded-lg focus:ring-green focus:border-green block w-full p-2.5" placeholder="Subject" required>
      </div>
      <div class="mb-2">
        <input type="text" id="large-input" class="bg-white border-none rounded-lg focus:ring-green focus:border-green block w-full p-5" placeholder="Write your message..." required>
      </div>
      {{-- SUBMIT BUTTON --}}
      <button class="w-full my-5 py-2 bg-green rounded-md uppercase font-extrabold text-white">Submit</button>
    </form>
  </div>
</div>

@endsection

