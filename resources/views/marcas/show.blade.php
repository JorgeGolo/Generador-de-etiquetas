@extends('layouts.plantilla')

@section('title', 'Variable')

@section('content')
    <h1>Marca: {{$marc->id}}</h1>

    <a href="{{route('marcas.index')}}">Volver a lista de marcas</a>
    
    <ul>
    <li><strong>Id de marca:</strong> {{$marc->id}}</li>
    <li><strong>Registro sanitario:</strong> {{$marc->registrosan}}</li>
    <li><strong>Marca:</strong> {{$marc->name}}</li>
    </ul>

    <hr/>

    <a href="{{route('marcas.edit', $marc)}}">Editar</a>

    <hr/>

    <form action="{{route('marcas.destroy',$marc)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
    <span style="color: red">ATENCIÓN: Este botón borrará todos los productos y etiquetas asociados con esta marca</span>
    <hr>

 
@endsection