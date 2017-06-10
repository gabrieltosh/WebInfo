<?php

namespace WebInfo;

use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    protected $table='tblNegocio';
    protected $fillable=['nombre','descripcion','ubicacion','imagen','telefono','usuario_id'
    ];
}
