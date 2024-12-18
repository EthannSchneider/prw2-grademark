<?php

namespace App\Models;

use Watson\Validating\ValidatingTrait;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use ValidatingTrait;

    protected $rules = [
        'value' => 'required|numeric|decimal:0,1|min:1|max:6',
        'weight' => 'required|numeric|decimal:0,1|min:0|max:1',
    ];

    protected $fillable = ['value', 'weight', 'file_path'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function newCollection(array $models = [])
    {
        return new GradeCollection($models);
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
}

class GradeCollection extends \Illuminate\Database\Eloquent\Collection
{
    public function mean()
    {
        [$sum, $weight] = $this->reduceSpread(fn($sum, $weight, $grade) => [$sum + $grade->value * $grade->weight, $weight + $grade->weight], 0, 0);
        return $sum / $weight;
    }
}