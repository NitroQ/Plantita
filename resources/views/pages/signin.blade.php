@extends('layout.client.front')
@section('title', 'Sign In')
@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 h-screen w-full py-0">
        <div class="hidden sm:block relative">
            <img class="w-full h-full object-cover" src="{{ asset('images/entry/signin-cover.webp') }}"
                alt="watering can and plant">
            <div class="absolute inset-0 bg-light-green-200-pattern-full opacity-100"></div>
        </div>
        <div class="flex flex-col justify-center">
            {{-- SIGN IN FORM --}}
            <form class="max-w-[500px] w-full mx-auto text-center p-8 px-8 " action="{{ route('authenticate') }}"
                method="POST">
                {{ csrf_field() }}
                <h2 class="font-brandon-black text-green-200 italic font-bold text-6xl">Hello again!</h2>
                <h4 class="font-brandon-regular text-gray font-normal text-xl mt-2 mb-6">Welcome back! Let's get you back to
                    plant paradise!</h4>
                <div class="mb-2">
                    <input type="email" id="email" name="email"
                        class="bg-white border-none rounded-lg focus:ring-green-200 focus:border-green-200 block w-full p-2.5"
                        placeholder="Email Address" required>
                </div>
                <div class="mb-2">
                    <input type="password" id="password" name="password"
                        class="bg-white border-none rounded-lg focus:ring-green-200 focus:border-green-200 block w-full p-2.5"
                        placeholder="Password" required>
                </div>
                <div class="flex justify-between py-2">
                    {{-- REMEMBER ME --}}
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox"
                            class="w-4 h-4 text-green-200 bg-gray-100 border-gray-300 rounded focus:ring-green-200">
                        <label for="checked-checkbox" class="ml-2 text-md font-medium text-gray italic">Remember Me</label>
                    </div>
                    <div class="text-black font-bold">
                    </div>
                </div>
                {{-- SIGN IN BUTTON --}}
                <button type="submit"
                    class="w-full my-5 py-2 bg-green-200 rounded-md uppercase font-extrabold text-white">Sign
                    In</button>
                <div class="flex justify-center py-6 gap-2">
                    <span class="text-gray-500">
                        Don't have an account?
                    </span>
                    <a href="{{ route('signup') }}">
                        <span class="text-green-200 font-bold">
                            Register here
                        </span>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
