@extends('layouts.plantilla')

@section('title', 'Lista de Productos')

@section('content')


    <h1>Lista de productos</h1>

    @foreach ($productos as $prod)
            <li>{{$prod->name}}</li>
    @endforeach


@endsection