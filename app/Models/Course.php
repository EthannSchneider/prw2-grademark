<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function studyPlan()
    {
        return $this->belongsTo(StudyPlan::class);
    }
}
