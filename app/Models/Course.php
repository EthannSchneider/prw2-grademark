<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $rules = [
        'name' => 'required',
    ];

    protected $fillable = ['name'];
}
