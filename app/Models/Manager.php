<?php

namespace App\Models;
Use App\Role;

class Manager extends User
{
    public static function boot()
    {
        parent::boot();

        static::addGlobalScope('role', function ($builder) {
            $builder->where('role', Role::Manager);
        });
    }
}
