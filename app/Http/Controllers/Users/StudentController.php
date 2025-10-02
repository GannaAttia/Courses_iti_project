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

   public function editProfile(){
     $student = Auth::user();
     return view('profileEdit', compact('student'));
   }
  
 public function updateProfile(Request $request)
{
    $student = Auth::user();

    $request->validate([
        'name'  => 'required|string|max:255',
        'phone' => 'nullable|string|max:20',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
    ]);

     $student->name = $request->name;
    $student->phone = $request->phone;

    if ($request->hasFile('image')) {
        
        if ($student->image && file_exists(public_path('uploads/students/'.$student->image))) {
            unlink(public_path('uploads/students/'.$student->image));
        }

      
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/students'), $imageName);

        $student->image = $imageName;
    }

    $student->save();

    return redirect()->route('user.profile')->with('success', 'Profile updated successfully');
}
}