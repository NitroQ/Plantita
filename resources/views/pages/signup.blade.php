@extends('layout.client.front')
@section('title', 'Sign Up')
@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 h-screen w-full ">
      <div class="flex flex-col justify-center">
        <form class="max-w-[600px] w-full mx-auto text-center p-8 px-8 ">
          <h2 class="font-brandon-black text-green italic font-bold text-6xl">New Here?</h2>
          <h4 class="font-brandon-regular text-gray font-normal text-xl mb-6 mt-2">Join our community and embark on a green journey with us.</h4>
          <div class="mb-2">
            <input type="email" id="email" class="bg-white border-none rounded-lg focus:ring-green focus:border-green block w-full p-2.5" placeholder="Email Address" required>
          </div>
          <div class="mb-2">
            <input type="username" id="username" class="bg-white border-none rounded-lg focus:ring-green focus:border-green block w-full p-2.5" placeholder="Username" required>
          </div>
          <div class="mb-2">
            <input type="password" id="password" class="bg-white border-none rounded-lg focus:ring-green focus:border-green block w-full p-2.5" placeholder="Password" required>
          </div>
          <div class="mb-2">
            <input type="password" id="confirm_password" class="bg-white border-none rounded-lg focus:ring-green focus:border-green block w-full p-2.5" placeholder="Confirm Password" required>
          </div>
          <div class="flex items-start py-2">
            <div class="flex items-center h-5">
              <input id="remember" type="checkbox" value="" class="w-4 h-4 text-green bg-gray-100 border-gray-300 rounded focus:ring-green" required>
            </div>
            <label for="remember" class="ml-2 text-md font-medium text-gray italic">Accept <a href="#" class="hover:underline dark:text-green">Terms and Conditions</a>.</label>
          </div>
          <button class="w-full my-5 py-2 bg-green rounded-md uppercase font-extrabold text-white">Sign Up</button>
          <div class="flex justify-center py-6 gap-2">
            <span class="text-gray">
              Already have an account?
            </span>
            <a href="{{ route('signin') }}">
              <span class="text-green font-bold">
                Sign-in
              </span>
            </a>
          </div>
        </form>
      </div>
      <div class="hidden sm:block relative">
        <img class="w-full h-full object-cover " src="{{ asset('images/entry/signup-cover.webp') }}" alt="watering can and plant">
        <div class="absolute inset-0 bg-light-green-pattern-full opacity-100"></div>
      </div>
    </div>
@endsection

