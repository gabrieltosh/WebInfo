<?php

namespace WebInfo;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='tblProducto';
    protected $fillable=['nombre','categoria_id','descripcion','imagen','precio','marca_id','negocio_id','usuario_id'
    ];
}
