<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginView(){
        $countries = Country::get();
        return view('frontend.auth.login', compact('countries'));
    }

    public function loginProcess()
    {
        $validator = Validator::make(request()->all(), [
            'email' => 'required|max:255|email',
            'password' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if(!empty(Auth::validate(['email' => request()->email, 'password' => request()->password]))){
            $user = User::where('email', request()->email)->first();

            if(empty($user)){
                return redirect()->back()->withInput()->with('error', 'You are not able to access.');
            }

            $rememberMe = !empty(request()->remember_me)?:false;

            if(Auth::attempt(['email' => request()->email, 'password' => request()->password],$rememberMe)){
                return redirect('/jobs');
            }
        }

        return redirect()->back()->withInput()->with('error', 'Incorrect email or password.');

    }

    public function registerProcess()
    {
        $validator = Validator::make(request()->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'terms_accept' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        User::create([

            'fname' => request()->get('firstname'),
            'lname' => request()->get('lastname'),
            'country_id' => request()->get('country'),
            'email' => request()->get('email'),
            'terms_accept' => request()->get('terms_accept'),
            'password' => Hash::make(request()->get('password')),
        ]);

        return response()->json(['message' => 'Register successfully Please Login With Your Credential'], 201);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}