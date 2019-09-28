<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{

    protected $fillable = [ // protege q no inserten datos
        'nombre', 'email', 'mensaje',
    ];
}
