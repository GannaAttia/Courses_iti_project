<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\CssSelector\Node\FunctionNode;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

        public function register(){
        return view('auth.register');
    }
            public function profile(){
        return view('auth.profile');
    }

        public function handleLogin(Request $request){
        $data=$request->validate([
        'email'=> 'required|email',
        'password'=> 'required|min:6',

        ]);

       $is_login= Auth::attempt(['email'=>$request->email,'password'=>$request->password]);

       if(! $is_login){
        return redirect()->route('login')->with('msg','not validate email or password');
       }else if(Auth::user()->is_admin==0){
         return redirect()->route('user.courses.index');
       }else{
         return redirect()->route('user.dashboard');
       }

       if(Auth::user()->is_admin==0){
        return redirect()->route('user.courses.index');
       }else{
        //dashboard page
        return redirect()->route('user.dashboard');
       }
    }
            public function handleRegister(Request $request){
                $data=$request->validate([
                'name'=> 'required|alpha|max:255|min:3',
                'email'=> 'required|email|unique:students,email',
                'password'=> 'required|min:6',
                'password_confirmation'=> 'required|same:password'
                ]);
        $data['password']= Hash::make($request->password);

       $user= User::create($data);//return created user

        Auth::login($user);

         return redirect()->route('user.courses.index');
    }
            public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
