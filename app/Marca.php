<?php

namespace WebInfo;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table='tblMarca';
    protected $fillable=[ 'nombre','descripcion','imagen'
    ];
}
