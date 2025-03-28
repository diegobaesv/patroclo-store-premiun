<?php

namespace App\Http\Controllers;
use App\Models\Subcategoria;
use Illuminate\Http\Request;

class SubcategoriaController extends Controller
{
    public function index($idCategoria) {
        $subcategorias = Subcategoria::where('id_categoria',$idCategoria)
                                    ->where('estado_auditoria','1')
                                    ->get();
        return view('subcategorias', compact('subcategorias'));
    }
}
