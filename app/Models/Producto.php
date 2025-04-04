<?php

namespace App\Models;
use App\Models\Subcategoria;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $primaryKey = 'id_producto';

    protected $fillable = [
        'id_producto',
        'nombre',
        'imagen_url',
        'id_subcategoria',
        'precio_dolares',
        'stock'
    ];

    public function subcategoria(){
        return $this->belongsTo(Subcategoria::class,'id_subcategoria');
    }

    public $timestamps = false;
}
