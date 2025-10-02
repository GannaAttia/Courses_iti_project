<?php

    namespace App\Http\Controllers;

    use App\Models\Course;
    use App\Models\Instructor;
    use Illuminate\Http\Request;

    class AdminController extends Controller
    {
        /**
         * Handle the incoming request.
         */
    public function dashboard()
        {
            $courses = Course::get();
            return view('dashboard',compact('courses')); // resources/views/dashboard.blade.php
        }

        public function create(){
        $instructors=Instructor::get();
            return view("create",compact('instructors'));
        }

        public function store(Request $request){
            $data=$request->validate([
                'name'=> 'required',
                'instructor_id' => ['integer'],
                'description' => 'nullable|string',
                'price' => 'nullable|numeric',
                'image' => 'nullable|image',
            ]);
                if ($request->hasFile('image')) {
                        $imageName = time() . '.' . $request->image->extension();
                        $request->image->move(public_path('courses'), $imageName);
                        $data['image'] = 'courses/' . $imageName;
                    }

            Course::create($data);
            return redirect()->back()->with('msg','added successfully .. ');

        }

        public function show($id){
        $course= Course::findorfail($id);

            return view("show",compact('course'));

        }

        public function destroy($id){
            $course= Course::findorfail($id);

            $course->delete();

            return redirect()->back()->with('msg','deleted successfully .. ');

        }

        public function edit($id){
            $course= Course::findorfail($id);
            $instructors=Instructor::get();
            return view("edit",compact('course','instructors'));

        }

        public function update(Request $request , $id){

            $data=$request->validate([
                'name'=> 'required',
                'instructor_id' => ['integer'],
                'description' => 'nullable|string',
                'price' => 'nullable|numeric',
                'image' => 'nullable|image',
            ]);

            $course= Course::findorfail($id);
            $course->update($data);

            return redirect()->back()->with('msg','updated successfully .. ');
        }












    }
