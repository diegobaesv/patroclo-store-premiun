<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoCompraController extends Controller
{
    public function addItem(Request $request){  
        
        


        return response()->json([
            'status' => '200',
            'message' => 'El producto ha sido añadido al carrito'
        ]);
    }
}
