<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Grade extends Model
{
    protected $fillable = [
        'value'
    ];

    use ValidatingTrait;

	protected $rules = [
		'value'   => 'required|decimal:0,1|min:1|max:6'
	];
}
