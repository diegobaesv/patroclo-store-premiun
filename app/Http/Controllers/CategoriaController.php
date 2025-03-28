<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index() {
        $categorias = Categoria::where('estado_auditoria','1')->get();
        return view('categorias', compact('categorias'));
    }
}
