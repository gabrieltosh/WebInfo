<?php

namespace WebInfo;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='tblCategoria';
    protected $fillable=['nombre','descripcion'
    ];
}
