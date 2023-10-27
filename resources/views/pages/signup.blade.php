@extends('layout.client.front')
@section('title', 'Sign Up')
@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 h-screen w-full ">
      <div class="flex flex-col justify-center">
        <form class="max-w-[600px] w-full mx-auto text-center p-8 px-8 ">
          <h2 class="font-brandon-black text-green italic font-bold text-6xl">New Here?</h2>
          <h4 class="font-brandon-regular text-gray font-normal text-xl mt-2">Join our community and embark on a green journey with us.</h4>
          <div class="flex flex-col">
            <input class="bg-white mt-2 border-none focus:border-green focus:outline-none" type="text" placeholder="Email Address"/>
            <input class="bg-white mt-2 border-none focus:border-green focus:outline-none" type="password"placeholder="Password"/>
          </div>
          <div class="flex justify-between py-2">
              <span class="text-gray italic">
                <input class="border-gray rounded-sm" type="checkbox" name="" id="">
                Remember Me
              </span>
              <span class="text-black font-bold">
                Forgot Password
              </span>
          </div>
          <button class="w-full my-5 py-2 bg-green rounded-md uppercase font-extrabold text-white">Sign In</button>
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

