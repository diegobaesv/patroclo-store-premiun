<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () { return view('welcome'); });

Route::get('/categorias', [CategoriaController::class,'index'])->name('categorias.index');
Route::get('/categorias/{idCategoria}/subcategorias',[SubcategoriaController::class,'index'])->name('subcategorias.index');
Route::get('/subcategorias/{idSubcategoria}/productos',[ProductoController::class,'index'])->name('productos.index');
