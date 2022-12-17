@extends('layouts.plantilla')

@section('title', 'Lista de Marcas')

@section('content')


    <h1>Lista de marcas</h1>

    <h3><a href="{{route('marcas.create')}}">Crear marca</a></h3>

    @foreach ($marcas as $marca)
            <li><a href="{{route('marcas.show', $marca->id)}}">{{$marca->name}}</a></li>
    @endforeach




@endsection