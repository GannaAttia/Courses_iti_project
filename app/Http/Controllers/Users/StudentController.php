<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(){
        return view('index');
    }
        public function course(){
        return view('course');
    }
    
     public function profile()
    {
        $student = Auth::user();   
        return view('profile', compact('student'));
    }



}
