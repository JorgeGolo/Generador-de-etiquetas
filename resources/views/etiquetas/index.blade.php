@extends('layouts.plantilla')

@section('title', 'Lista de etiquetas')

@section('content')
    <h1>Lista de etiquetas</h1>

    @foreach ($etiquetas as $etiqueta)
            <!-- <li>{{$etiqueta}}</li> -->
            <!-- <li>nombre producto: {{$etiqueta->producto->name}}, marca: {{$etiqueta->producto->marca->name}}, registro sanitario: {{$etiqueta->producto->marca->registrosan}}</li> -->
            <!-- <li>{{$etiqueta->producto->marca->name}}</li> -->
            <li><a href="{{route('etiquetas.show', $etiqueta->id)}}">{{$etiqueta->producto->name}}</a></li>
    @endforeach

@endsection