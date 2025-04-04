<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarritoCompraController;

Route::get('/', function () { return view('welcome'); });

Route::get('/categorias', [CategoriaController::class,'index'])->name('categorias.index');
Route::get('/categorias/{idCategoria}/subcategorias',[SubcategoriaController::class,'index'])->name('subcategorias.index');
Route::get('/subcategorias/{idSubcategoria}/productos',[ProductoController::class,'index'])->name('productos.index');
Route::post('/carrito-compras/nuevo-producto',[CarritoCompraController::class,'addItem'])->name('carrito-compras.additem');
Route::get('/carrito-compras/{idSession}',[CarritoCompraController::class,'index'])->name('carrito-compras.index');