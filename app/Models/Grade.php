<?php

namespace App\Models;

use Watson\Validating\ValidatingTrait;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
	use ValidatingTrait;

	protected $rules = [
		'value' => 'required|numeric|decimal:0,1|min:1|max:6',
	];

    protected $fillable = ['value'];

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
