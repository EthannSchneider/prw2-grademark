<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class SchoolClass extends Model
{
    use ValidatingTrait;

    protected $table = 'school_classes';


    protected $rules = [
        'name' => 'required|min:2|max:255',
    ];

    protected $fillable = ['name', 'study_plan_id'];

    public function students()
    {
        return $this->hasMany(Student::class, 'school_class_id');
    }

    public function studyPlan()
    {
        return $this->belongsTo(StudyPlan::class, 'study_plan_id');
    }

    public function studentSync($ids)
    {
        $ids = collect($ids);
        $this->students()->whereNotIn('id', $ids)->update(['school_class_id' => null]);
        Student::whereIn('id', $ids)->update(['school_class_id' => $this->id]);
    }
}
