<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\PedidoDetalle;

class CarritoCompraController extends Controller
{
    public function index($idSession){
        $pedido_detalles = PedidoDetalle::whereHas('pedido', function($query) use ($idSession) {
            $query->where('codigo','=',$idSession);
        })->get();

        return view('carrito-compra', compact('pedido_detalles'));
    }

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

        $pedidoDetalle = PedidoDetalle::where('id_producto',$idProducto)
                                        ->where('id_pedido', $pedido->id_pedido )
                                        ->first();

        if($pedidoDetalle == null){
            $pedidoDetalle = new PedidoDetalle();
            $pedidoDetalle->id_pedido = $pedido->id_pedido;
            $pedidoDetalle->id_producto = $idProducto;
    
            $pedidoDetalle->save();
        } else {
            $pedidoDetalle->cantidad = $pedidoDetalle->cantidad + 1;
            $pedidoDetalle->save();
        }

        return response()->json([
            'status' => '200',
            'message' => 'El producto ha sido añadido al carrito'
        ]);
    }
}
