<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

        public function handleLogin(){
        
    }
            public function handleRegister(){
        
    }
            public function logout(){
        
    }
}
