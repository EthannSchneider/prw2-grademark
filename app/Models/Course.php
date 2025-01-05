<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Watson\Validating\ValidatingTrait;

class Course extends Model
{
    use ValidatingTrait;

    protected $throwValidationExceptions = true;

    protected $rules = [
        'name' => 'required|min:2|max:255',
    ];

    protected $fillable = ['name'];

    public function studyPlan()
    {
        return $this->belongsTo(StudyPlan::class);
    }

    public function scopeAvailable(Builder $query)
    {
        $query->whereNull('study_plan_id');
    }
}
