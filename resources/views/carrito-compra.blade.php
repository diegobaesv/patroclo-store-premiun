@extends('layouts.app')


@section('content')
    <h1 class="text-center text-gray-800 text-2xl font-medium mb-4">Este es tu carrito de compras</h1>

    <table class="w-full text-sm text-left rtl:text-right text-gray-700">
        <thead class="text-xs uppercase bg-gray-300  ">
            <tr>
                <th scope="col" class="px-6 py-3">Producto</th>
                <th scope="col" class="px-6 py-3">Precio</th>
                <th scope="col" class="px-6 py-3">Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedido_detalles as $pedido_detalle)
                <tr class="bg-white border-b border-gray-200">
                    <td>{{ $pedido_detalle->producto->nombre }}</td>
                    <td>USD {{ $pedido_detalle->producto->precio_dolares }}</td>
                    <td>{{ $pedido_detalle->cantidad  }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection