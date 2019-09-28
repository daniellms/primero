<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'nombre_vista',
    ];

    public function user()
    {
        //return $this->hasOne(User::class);// me mostrara solo 1 usuario relacionado
        return $this->hasMany(User::class); // mostrara todos los usuarios relacionados

    }
}


