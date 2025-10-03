<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'instructor_id',
        'price',
        'image',
        'description',

    ];

   public function students()
{
    return $this->belongsToMany(User::class, 'course_student', 'course_id', 'student_id')
                ->withTimestamps();
}

    
public function instructor()
{
    return $this->belongsTo(Instructor::class, 'instructor_id');
}


}
