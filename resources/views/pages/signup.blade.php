@extends('layout.client.front')
@section('title', 'Sign Up')
@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 h-screen w-full ">
        <div class="flex flex-col justify-center">
            {{-- SIGN UP FORM --}}
            <form class="max-w-[600px] w-full mx-auto text-center p-8 px-8 " action="{{ route('register') }}" method="POST">
                {{ csrf_field() }}
                <h2 class="font-brandon-black text-green italic font-bold text-6xl">New Here?</h2>
                <h4 class="font-brandon-regular text-gray font-normal text-xl mb-6 mt-2">Join our community and embark on a
                    green journey with us.</h4>
                <div class="grid md:grid-cols-6 gap-4 mb-2">
                    <div class="col-span-3">
                        <input type="text" id="first_name" name="first_name"
                            class="bg-white border-none rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                            placeholder="First Name" required>
                    </div>
                    <div class="col-span-3">
                        <input type="text" id="last_name" name="last_name"
                            class="bg-white border-none rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                            placeholder="Last Name" required>
                    </div>
                </div>
                <div class="mb-2">
                    <input type="email" id="email" name="email"
                        class="bg-white border-none rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                        placeholder="Email Address" required>
                </div>
                <div class="mb-2">
                    <input type="username" id="username" name="username"
                        class="bg-white border-none rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                        placeholder="Username" required>
                </div>
                <div class="mb-2">
                    <input type="password" id="password" name="password"
                        class="bg-white border-none rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                        placeholder="Password" required>
                </div>
                <div class="mb-2">
                    <input type="password" id="confirm_password" name="password_confirmation"
                        class="bg-white border-none rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                        placeholder="Confirm Password" required>
                </div>
                {{-- AGREE TERMS AND CONDITION --}}
                <div class="flex items-start py-2">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value=""
                            class="w-4 h-4 text-green-200 bg-gray-100 border-gray-300 rounded focus:ring-green-200"
                            required>
                    </div>
                    <label for="remember" class="ml-2 text-md font-medium text-gray italic">Accept <a href="#"
                            class="hover:underline">Terms and Conditions</a>.</label>
                </div>
                {{-- SIGN UP BUTTON --}}
                <button type="submit" class="w-full my-5 py-2 bg-green-200 rounded-md uppercase font-extrabold text-white">Sign
                    Up</button>
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
            <img class="w-full h-full object-cover " src="{{ asset('images/entry/signup-cover.webp') }}"
                alt="watering can and plant">
            <div class="absolute inset-0 bg-light-green-pattern-full opacity-100"></div>
        </div>
    </div>
@endsection
