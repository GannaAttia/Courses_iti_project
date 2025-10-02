<?php
namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{

    public function index()
    {
        $courses = \App\Models\Course::latest()->get();
        return view('courses.index', compact('courses'));
    }


    public function index_course()
    {
        $courses = \App\Models\Course::latest()->get();
        return view('courses.course', compact('courses'));
    }

    public function enroll($id)
    {
        $course = Course::findOrFail($id);
        $student = \App\Models\User::findOrFail(Auth::id());

        if(!$student->course_id) {
            $student->course_id = $course->id;
            $student->save();

            return redirect()->back()->with('success', 'You have successfully enrolled in the course!');
        }

        return redirect()->back()->with('info', 'You have already enrolled in a course.');
    }





    public function join($courseId)
    {
        $course = Course::findOrFail($courseId);

        $user = Auth::user();
        $userModel = \App\Models\User::findOrFail($user->id);
        $userModel->course_id = $course->id;
        $userModel->save();

        return redirect()->back()->with('success', 'You have joined the course!');
    }
}

?>
