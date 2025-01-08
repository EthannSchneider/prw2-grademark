<?php

namespace App\Models;

Use App\Role;

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

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope('role', function ($builder) {
            $builder->where('role', Role::Student);
        });
    }
}
