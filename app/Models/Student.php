<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class Student extends User
{
    protected $table = 'users';

    public function grades()
    {
        return $this->hasMany(Grade::class, 'user_id');
    }

    public function graded_courses()
    {
        return $this->hasManyThrough(Course::class, Grade::class, 'user_id', 'id', 'id', 'course_id')->distinct();
    }

    public function scopeBestStudent(Builder $query)
    {
        return $query->whereHas('grades')
                     ->get()
                     ->sortByDesc(function (Student $student) {
                        return $student->grades->mean();
                     })
                     ->take(10);
    }
}
