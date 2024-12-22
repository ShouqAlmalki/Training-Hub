<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller{

    public function signup(){
        return view('auth.signup');
    }

    public function signupPost(Request $request){


            return redirect(route('login'))->with('success','sign up seccessful');

        //return redirect(route('signup'))->with('error','sign up failed');
    }

    public function signin(){
        return view('auth.signin');
    }

    public function signinPost(Request $request){

            return redirect()->intended(route('home'));

       // return redirect(route('login'))->with("error","invalid email or password");
    }


}
