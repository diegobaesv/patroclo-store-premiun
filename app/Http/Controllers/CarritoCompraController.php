<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\PedidoDetalle;

class CarritoCompraController extends Controller
{
    public function addItem(Request $request){  

        $idProducto = $request->input('idProducto');
        $sessionId = $request->input('sessionId');
        
        $pedido = Pedido::where('codigo',$sessionId)
                        ->where('estado_auditoria','1')
                        ->first();

        if($pedido == null){
            $pedido = new Pedido();
            $pedido->codigo = $sessionId;
            $pedido->observacion = 'Creado desde Laravel para carrito';

            $pedido->save();
        }
        
        $pedidoDetalle = new PedidoDetalle();
        $pedidoDetalle->id_pedido = $pedido->id_pedido;
        $pedidoDetalle->id_producto = $idProducto;

        $pedidoDetalle->save();


        return response()->json([
            'status' => '200',
            'message' => 'El producto ha sido añadido al carrito'
        ]);
    }
}
