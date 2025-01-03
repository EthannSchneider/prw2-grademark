<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Course extends Model
{
    public function studyPlan()
    {
        return $this->belongsTo(StudyPlan::class);
    }

    public function scopeAvailable(Builder $query)
    {
        $query->whereNull('study_plan_id');
    }
}
