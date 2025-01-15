<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class Student extends User
{
    protected $table = 'users';

    public function grades()
    {
        return $this->hasMany(Grade::class, 'user_id');
    }

    public function school_class()
    {
        return $this->belongsTo(SchoolClass::class, 'school_class_id');
    }

    public function graded_courses()
    {
        return $this->hasManyThrough(Course::class, Grade::class, 'user_id', 'id', 'id', 'course_id')->distinct();
    }

    public function scopeAvailable(Builder $query)
    {
        return $query->whereNull('school_class_id');
    }

    public function schoolClassCourses() {
        if ($this->school_class === null) {
            return new Collection();
        }
        return $this->school_class->studyPlan->courses;
    }
}
