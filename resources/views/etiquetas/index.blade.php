@extends('layouts.plantilla')

@section('title', 'Lista de etiquetas')

@section('content')
    <h1>Lista de etiquetas</h1>

    <h3><a href="{{route('etiquetas.create')}}">Crear etiqueta</a></h3>

    <table class="tablaetiquetas">
        @foreach ($etiquetas as $etiqueta)
        <tr>
            <td><a href="{{route('etiquetas.show', $etiqueta->id)}}">{{$etiqueta->name}}</a></td>
            <td><a href="{{route('etiquetas.edit', $etiqueta->id)}}">Editar</a></td>
            <td><a href="{{route('etiqueta.pdf', $etiqueta->id)}}">Vista previa</a></td>
            <td><a href="{{route('getpdf', $etiqueta->id)}}">PDF</a></li></td>
        </tr>   
        @endforeach
    </table>

@endsection