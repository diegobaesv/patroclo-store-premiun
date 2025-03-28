<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
        'id_categoria',
        'nombre',
        'imagen_url'
    ];

    public $timestamps = false;
}
