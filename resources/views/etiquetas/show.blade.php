@extends('layouts.plantilla')

@section('title', 'Variable')

@section('content')
    <h1>Etiqueta: {{$etique->id}}</h1>
    
    <a href="{{route('etiquetas.index')}}">Volver a lista de etiquetas</a>
    
    <ul>
        <li><strong>Producto:</strong> {{$etique->producto->name}}</li>
        <li><strong>Registro sanitario:</strong> {{$etique->producto->marca->registrosan}}</li>
        <li><strong>Marca:</strong> {{$etique->producto->marca->name}}</li>
        <li><strong>Lote:</strong> {{$etique->fechaenvasado}}</li>
        <li><strong>Caducidad:</strong> {{$etique->fechacaducidad}}</li>
        <li><strong>Frase adicional:</strong> {{$etique->adicional}}</li>
        <li><strong>Peso:</strong> {{$etique->peso}}</li>
        <li><strong>Precio Kilo:</strong> {{$etique->preciokilo}}</li>
        <li><strong>Precio:</strong> {{$etique->precio}}</li>
    </ul>
        

    <hr/>

    <form action="{{route('etiquetas.destroy',$etique)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
    <span style="color: red">ATENCIÓN: Esta opción es irreversible.</span>
    <hr>


@endsection