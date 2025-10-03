<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'students';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

public function courses()
{
    return $this->belongsToMany(Course::class, 'course_student', 'student_id', 'course_id');
}



    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('uploads/students/' . $this->image);
        }
        return asset('uploads/students/default.png');
    }
}
