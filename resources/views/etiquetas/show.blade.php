@extends('layouts.plantilla')

@section('title', 'Variable')

@section('content')
    <h1>Etiqueta: {{$etique->id}}</h1>
    <!-- <p>{{$etique}}</p> -->

    <a href="{{route('etiquetas.index')}}">Volver a lista de etiquetas</a>
    
    <ul>
    <li><strong>Producto:</strong> {{$etique->producto->name}}</li>
    <li><strong>Registro sanitario:</strong> {{$etique->producto->marca->registrosan}}</li>
    <li><strong>Marca:</strong> {{$etique->producto->marca->name}}</li>
    <li><strong>Lote:</strong> {{$etique->fechaenvasado}}</li>
    <li><strong>Caducidad:</strong> {{$etique->caducidad}}</li>
    <li><strong>Frase adicional:</strong> {{$etique->adicional}}</li>
    <li><strong>Peso:</strong> {{$etique->peso}}</li>
    <li><strong>Precio Kilo:</strong> {{$etique->preciokilo}}</li>
    <li><strong>Precio:</strong> {{$etique->precio}}</li>
    <ul>
        

@endsection