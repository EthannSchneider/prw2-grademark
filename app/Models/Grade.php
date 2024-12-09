<?php

namespace App\Models;

use Watson\Validating\ValidatingTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Grade extends Model
{
    use ValidatingTrait;

    protected $rules = [
        'value' => 'required|numeric|decimal:0,1|min:1|max:6',
    ];

    protected $fillable = ['value', 'weight', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFromUser(Builder $query, $user)
    {
        $query->where('user_id', $user->id);
    }

    public function scopeFromCourse(Builder $query, $course)
    {
        $query->where('course_id', $course->id);
    }

    protected function withValidator($validator)
    {
        $validator->after($this->validateSemiPointValue(...));
    }

    protected function validateSemiPointValue($validator)
    {
        if (fmod($this->value, 0.5) != 0.0) {
            $validator->errors()->add('value', 'Grade must be rounded on semi-point');
        }
    }

    public function newCollection(array $models = [])
    {
        return new GradeCollection($models);
    }
}

class GradeCollection extends \Illuminate\Database\Eloquent\Collection
{
    public function mean()
    {
        [$sum, $weight] = $this->reduceSpread(fn($sum, $weight, $grade) => [$sum + $grade->value * $grade->weight, $weight + $grade->weight], 0, 0);
        return $sum / $weight;
    }
}
