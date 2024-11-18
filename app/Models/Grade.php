<?php

namespace App\Models;

use Watson\Validating\ValidatingTrait;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
	use ValidatingTrait;

	protected $rules = [
		'value' => 'required|decimal:0,1|min:1|max:6',
	];

    protected $fillable = ['value'];

}
