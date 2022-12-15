@extends('layouts.plantilla')

@section('title', 'Lista de etiquetas')

@section('content')
    <h1>Lista de etiquetas</h1>

    @foreach ($etiquetas as $etiqueta)
            <!-- <li>{{$etiqueta}}</li> -->
            <li>nombre producto: {{$etiqueta->producto->name}}, marca: {{$etiqueta->producto->marca->name}}, registro sanitario: {{$etiqueta->producto->marca->registrosan}}</li>
    @endforeach

@endsection