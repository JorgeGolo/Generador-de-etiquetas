@extends('layouts.plantilla')

@section('title', 'Variable')

@section('content')
    <h1>Producto: {{$prod->id}}</h1>

    <a href="{{route('productos.index')}}">Volver a lista de productos</a>
    
    <ul>
    <li><strong>Id de producto:</strong> {{$prod->id}}</li>
    <li><strong>Producto:</strong> {{$prod->name}}</li>
    <li><strong>Marca:</strong> {{$prod->marca->name}}</li>
    </ul>

    <hr/>

    <a href="{{route('productos.edit', $prod)}}">Editar</a>

    <hr/>

    <form action="{{route('productos.destroy',$prod)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
    <span style="color: red">ATENCIÓN: Este botón borrará todas las etiquetas asociadas con esta marca</span>
    <hr>

 
@endsection