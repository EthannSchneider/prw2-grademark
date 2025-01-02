<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyPlan extends Model
{
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
