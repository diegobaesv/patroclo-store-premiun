<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoDetalle extends Model
{
    protected $table = 'pedido_detalles';

    protected $primaryKey = 'id_pedido_detalle';
 
    protected $fillable = [
        'id_pedido_detalle',
        'id_pedido',
        'id_producto',
        'cantidad',
        'precio_unitario',
        'porcentaje_descuento'
    ];
 
    public function pedido(){
        return $this->belongsTo(Pedido::class,'id_pedido');
    }
 
    public function producto(){
        return $this->belongsTo(Producto::class,'id_producto');
    }
 
    public $timestamps = false;
}
