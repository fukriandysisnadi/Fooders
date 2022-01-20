<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function profileView(){
        $user = Auth::user();

        return view('profile', ['user' => $user]);
    }


    public function transactionView(){
        $user = Auth::user();

        return view('transaction', ['user' => $user]);
    }

    public function updateProfile(Request $req){

        $rules= [
            'name' => 'required',
            // 'password' => ['required', "current_password:api"]
            'new-password' => ['required', 'alpha_num'],
            'confirm-password' => ['required', 'same:new-password']
        ];

        $validator = Validator::make($req->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        return redirect("/profile");
        
        Auth::user()->name = $req->name;
    }
}
