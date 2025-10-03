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
    $courses = \App\Models\Course::with(['instructor', 'students'])->withCount('students')->latest()->get();

    return view('courses.index', compact('courses'));
}



public function index_course()
{
    $courses = \App\Models\Course::with(['instructor', 'students'])
                ->withCount('students')
                ->latest()
                ->get();

    return view('courses.course', compact('courses'));
}

   public function enroll($id)
{
    $course = Course::findOrFail($id);
    $student = \App\Models\User::findOrFail(Auth::id());

    // ✅ Instead of checking single course_id, we check pivot relation
    if(!$student->courses()->where('course_id', $course->id)->exists()) {
        $student->courses()->attach($course->id); // ✅ Insert into pivot table

        return redirect()->back()->with('success', 'You have successfully enrolled in the course!');
    }

    return redirect()->back()->with('info', 'You are already enrolled in this course.');
}






 public function join($courseId)
{
    $course = Course::findOrFail($courseId);
    $user = \App\Models\User::findOrFail(Auth::id());

    // ✅ Prevent duplicate enrollment
    if(!$user->courses()->where('course_id', $course->id)->exists()) {
        $user->courses()->attach($course->id); // ✅ Insert into pivot table
        return redirect()->back()->with('success', 'You have joined the course!');
    }

    return redirect()->back()->with('info', 'You are already enrolled in this course.');
}

}

?>
