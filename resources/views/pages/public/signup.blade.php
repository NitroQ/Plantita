@extends('layout.client.front')
@section('title', 'Sign Up')
@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 h-screen w-full">
  <div class="flex flex-col justify-center mt-36">
    <form class="max-w-[600px] w-full mx-auto text-center p-8 px-8 " action="{{ route('register') }}" method="POST">
      {{ csrf_field() }}
      <h2 class="font-brandon-black text-green-200 italic font-bold text-6xl">New Here?</h2>
      <h4 class="font-brandon-regular text-gray font-normal text-xl mb-6 mt-2">Join our community and embark on a journey with us.</h4>
      <div class="grid md:grid-cols-2 gap-3 mb-2 text-start">
        <div class="">
          <input type="text" id="first_name" name="first_name" class="bg-white border {{ $errors->has('first_name') ? 'border-red-500' : 'border-lavender' }} rounded-lg focus:ring-green-200 focus:border-green-200 block w-full p-2.5 placeholder-gray-500/70" value="{{ old('first_name') }}" placeholder="First Name">
          <span class="text-sm text-crimson my-1">{{$errors->first('first_name')}}</span>
        </div>
        <div class="">
          <input type="text" id="last_name" name="last_name" class="bg-white border {{ $errors->has('last_name') ? 'border-red-500' : 'border-lavender' }} rounded-lg focus:ring-green-200 focus:border-green-200 block w-full p-2.5 placeholder-gray-500/70" value="{{ old('last_name') }}" placeholder="Last Name">
          <span class="text-sm text-crimson my-1">{{$errors->first('last_name')}}</span>
        </div>
        <div class="col-span-2">
          <input type="text" id="email" name="email" class="bg-white border {{ $errors->has('email') ? 'border-red-500' : 'border-lavender' }} rounded-lg focus:ring-green-200 focus:border-green-200 block w-full p-2.5 placeholder-gray-500/70" value="{{ old('email') }}" placeholder="Email Address">
          <span class="text-sm text-crimson my-1">{{$errors->first('email')}}</span>
        </div>
        <div class="col-span-2">
          <input type="username" id="username" name="username" class="bg-white border {{ $errors->has('username') ? 'border-red-500' : 'border-lavender' }} rounded-lg focus:ring-green-200 focus:border-green-200 block w-full p-2.5 placeholder-gray-500/70" value="{{ old('username') }}" placeholder="Username">
          <span class="text-sm text-crimson my-1">{{$errors->first('username')}}</span>
        </div>
        <div class="col-span-2">
          <input type="password" id="password" name="password" class="bg-white border {{ $errors->has('password') ? 'border-red-500' : 'border-lavender' }} rounded-lg focus:ring-green-200 focus:border-green-200 block w-full p-2.5 placeholder-gray-500/70" value="{{ old('password') }}" placeholder="Password">
        </div>
        <div class="col-span-2">
          <input type="password" id="confirm_password" name="password_confirmation" class="bg-white border {{ $errors->has('password') ? 'border-red-500' : 'border-lavender' }} rounded-lg focus:ring-green-200 focus:border-green-200 block w-full p-2.5 placeholder-gray-500/70" value="{{ old('password_confirmation') }}" placeholder="Confirm Password">
          <span class="text-sm text-crimson my-1">{{$errors->first('password')}}</span>
        </div>
      </div>
      <div class="flex items-start py-2">
        <div class="flex items-center h-5">
          <input id="remember" type="checkbox" value="" class="w-4 h-4 text-green-200 bg-white border-gray-300 rounded focus:ring-green-200" required>
        </div>
        <label for="remember" class="ml-3 text-md font-medium text-gray italic">Accept <a href="#" class="hover:underline">Terms and Conditions</a>.</label>
      </div>
      <button type="submit" class="w-full my-5 py-2 bg-green-200 rounded-md uppercase font-extrabold text-white">Sign Up</button>
      <div class="flex justify-center py-6 gap-2">
        <span class="text-gray-500">
          Already have an account?
        </span>
        <a href="{{ route('signin') }}">
          <span class="text-green-200 font-bold">
            Sign-in
          </span>
        </a>
      </div>
    </form>
  </div>
  <div class="hidden sm:block relative">
    <img class="w-full h-full object-cover " src="{{ asset('images/entry/signup-cover.webp') }}" alt="watering can and plant">
    <div class="absolute inset-0 bg-light-green-200-pattern-full opacity-100"></div>
  </div>
</div>
@endsection