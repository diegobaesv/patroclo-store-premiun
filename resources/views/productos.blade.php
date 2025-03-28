@extends('layouts.app')


@section('content')
    <h1 class="text-center text-gray-800 text-2xl font-medium">Elige un producto para comprarlo</h1>

    <div class="flex flex-wrap justify-evenly mt-4 gap-4">

        @foreach($productos as $producto)

            <div class="bg-gray-200 hover:bg-gray-300 w-[300px] h-[250px] p-4 rounded cursor-pointer">
                <!--img class="h-[130px] w-full object-cover rounded" src="" alt=""!-->
                <p class="text-center mt-3 font-medium text-gray-800">{{ $producto->nombre }}</p>
                <p class="text-center mt-3 font-medium text-green-800">Precio: ${{ $producto->precio_dolares }}</p>
                <p class="text-center mt-3 font-medium text-red-800">Stock: {{ $producto->stock }}</p>

                <button class="w-full p-2 bg-green-700 hover:bg-green-800 text-white rounded cursor-pointer">+ Añadir al carrito</button>
            </div>

        @endforeach

    </div>

@endsection
