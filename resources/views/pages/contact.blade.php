@extends('layout.client.front')
@section('title', 'Contact')
@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 h-screen w-full py-0">
        <div class="hidden sm:block relative">
          <img class="w-full h-full object-cover " src="{{ asset('images/other/contact-cover.webp') }}" alt="watering can and plant">
          <div class="absolute inset-0 bg-light-green-pattern-full opacity-100"></div>
        </div>
      <div class="flex flex-col justify-center">
        <form class="max-w-[500px] w-full mx-auto p-8 px-8 ">
          <h2 class="font-brandon-black text-green italic font-bold text-6xl">Got Questions?</h2>
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
          <button class="w-full my-5 py-2 bg-green rounded-md uppercase font-extrabold text-white">Submit</button>
        </form>
      </div>
    </div>
@endsection

