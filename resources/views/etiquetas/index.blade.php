@extends('layouts.plantilla')

@section('title', 'Lista de etiquetas')

@section('content')
    <h1>Lista de etiquetas</h1>

    @foreach ($etiquetas as $etiqueta)
            <li>{{$etiqueta}}</li>
        @endforeach

@endsection