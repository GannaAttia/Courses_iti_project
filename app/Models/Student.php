<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'password',
        'email',
        'image',
        

    ];

// in App\Models\User OR Student
public function courses()
{
    return $this->belongsToMany(Course::class, 'course_student', 'student_id', 'course_id')
                ->withTimestamps();
}


}
