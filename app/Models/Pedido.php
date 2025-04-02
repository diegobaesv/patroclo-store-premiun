<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $fillable = [
        'id_pedido',
        'codigo',
        'id_usuario_cliente',
        'id_usuario_vendedor',
        'fecha_entrega',
        'fecha_pago',
        'fecha_anulado',
        'estado_pedido',
        'motivo_anulado',
        'precio_total',
        'moneda',
        'metodo_pago',
        'codigo_envio',
        'observacion'
    ];

    public $timestamps = false;
}
