<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Hash;
use Validator;
use File;
use Log;
use DB;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
        ]);


        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->route('index')->with('flash_message', 'Logged in!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    protected function signin() {
		if (!Auth::check())
			return view('pages.public.signin');
		elseif(Auth::check())
			return redirect()->route('index');
		else
			return redirect()->back();
	}

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('signin')->with('flash_success', 'Logged out!');;
    }

    public function signup() {
        if (!Auth::check())
            return view('pages.public.signup');
        elseif(Auth::check())
            return redirect()->route('index');
        else
            return redirect()->back();
    }

    public function register(Request $request)
    {
        $validator = $this->validate($request, [
            'first_name' => 'required|min:2|max:50',
            'last_name' => 'required|min:2|max:50',
            'username' => 'required|min:3|max:30|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
        ],[
            'first_name.required' => 'First name is required',
            'first_name.min' => 'First name must be at least 2 characters',
            'first_name.max' => 'First name must be at most 50 characters',
            'last_name.min' => 'Last name must be at least 2 characters',
            'last_name.max' => 'Last name must be at most 50 characters',
            'last_name.required' => 'Last name is required',
            'username.required' => 'Username is required',
            'username.min' => 'Username must be at least 3 characters',
            'username.max' => 'Username must be at most 30 characters',
            'username.unique' => 'Username is already taken',
            'email.required' => 'Email is required',
            'email.email' => 'Email must be a valid email',
            'email.unique' => 'Email is already taken',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 8 characters',
            'password.max' => 'Password must be no more than 255 characters',
            'password.confirmed' => 'Password confirmation does not match',
            'password.regex' => 'Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character',
        ]);

        try{
            DB::beginTransaction();

            $user = User::create([
                'id' => (string) Str::uuid(),
                'first_name' => $validator['first_name'],
                'last_name' => $validator['last_name'],
                'username' => $validator['username'],
                'email' => $validator['email'],
                'password' => Hash::make($validator['password']),
            ]);

            DB::commit();
        }catch(\Exception $e){
            Log::error($e);
			DB::rollback();

			return redirect()
				->back()
				->with('flash_error', 'Something went wrong, please try again later.')
				->withInput();
        }

        return redirect()->route('signin')->with('flash_success', 'Registered!');
    }


}
