<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;

class AuthenticationController extends Controller
{
    public function loginView(){
        if(!Auth::check()){
            return view ('login');
        }
        return redirect()->back();
    }

    public function registerView(){
        if(!Auth::check()){
            return view ('register');
        }
        return redirect()->back();
    }

    public function login(Request $req){
        
        $foods = Food::inRandomOrder()->filter()->paginate(8);

        $credentials = [
            'username' => $req->username,
            'password' => $req->password
        ];

        if($req->remember){
            Cookie::queue('remember', $req->username, 120);
        }else{
            Cookie::queue(Cookie::forget('remember'));
        }

        if(Auth::attempt($credentials, true)){
            return redirect("/")->with('success', 'Login success! Welcome!');
        }else{
            return redirect('login')->with('error', 'Invalid user credentials.');
        }
    }

    public function register(Request $req){

        $rules= [
            'username' => ['required', 'min:6'],
            'name' => ['required'],
            'password' => ['required', 'alpha_num', 'min:6'],
            'role' => ['required']
        ];

        $credentials = [
            'username' => $req->username,
            'password' => $req->password
        ];

        $validator = Validator::make($req->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $newUser = new User();

        $newUser->username = $req->username;
        $newUser->name = $req->name;
        $newUser->provider_id = $req->id;
        $newUser->avatar = $req->avatar;
        $newUser->password = bcrypt($req->password);
        $newUser->role = $req->role;

        $newUser->save();
        Auth::attempt($credentials, true);
        return redirect("/")->with('success', "Register success! Welcome!");
    }

    public function logout(){
        Auth::logout();
        return view('login');
    }

    public function redirectToGoogle(){
        return Socialite::driver(driver:'google')->redirect();
    }

    public function handleGoogleCallback(){
        $user = Socialite::driver(driver: 'google')->user();
    }

    public function redirectToFacebook(){
        return Socialite::driver(driver:'facebook')->redirect();
    }

    public function handleFacebookCallback(){
        $user = Socialite::driver(driver: 'facebook')->user();
    }
}
