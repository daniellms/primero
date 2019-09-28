<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [ // protege q no inserten dates
        'nombre', 'tipo', 'numero_fisico','precio_compra','precio_venta','marca'
    ];
}
