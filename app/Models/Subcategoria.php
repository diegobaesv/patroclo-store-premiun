<?php

namespace App\Models;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $table = 'subcategorias';

    protected $fillable = [
        'id_subcategoria',
        'nombre',
        'imagen_url',
        'id_categoria'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class,'id_categoria');
    }

    public $timestamps = false;
}
