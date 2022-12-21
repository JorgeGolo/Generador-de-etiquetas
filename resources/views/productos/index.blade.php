@extends('layouts.plantilla')

@section('title', 'Lista de Productos')

@section('content')


    <h1>Lista de productos</h1>

    <h3><a href="{{route('productos.create')}}">Crear producto</a></h3>

    @foreach ($productos as $prod)
            <li><a href="{{route('productos.show', $prod->id)}}">{{$prod->name}}</a> // <a href="{{route('productos.edit', $prod->id)}}">Editar</a></li>
    @endforeach


@endsection