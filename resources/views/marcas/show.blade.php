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

    Productos de esa marca:

    <ul>
    <li>Aquí podríamos insertar un enlace para añadir productos</li>
    </ul>

@endsection