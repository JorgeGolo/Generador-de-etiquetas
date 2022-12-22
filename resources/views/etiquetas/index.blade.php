@extends('layouts.plantilla')

@section('title', 'Lista de etiquetas')

@section('content')
    <h1>Lista de etiquetas</h1>

    <h3><a href="{{route('etiquetas.create')}}">Crear etiqueta</a></h3>

    @foreach ($etiquetas as $etiqueta)
            <li><a href="{{route('etiquetas.show', $etiqueta->id)}}">{{$etiqueta->name}}</a>// 
            <a href="{{route('etiquetas.edit', $etiqueta->id)}}">Editar</a> // 
            <a href="{{route('etiqueta.pdf', $etiqueta->id)}}">PDF</a></li>
    @endforeach

@endsection