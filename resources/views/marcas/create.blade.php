@extends('layouts.plantilla')

@section('title', 'Creador de marcas')

@section('content')
    <h1>Creador de marcas</h1>

    <form action="{{route('marcas.store')}}" method="POST">
    @csrf

        <label>
            Nombre:<br>
            <input type="text" name="name">
        </label>
        <br>

        <label>
            Registro sanitario:<br>
            <input type="text" name="regsan">
        </label>
        <br>

        <button type="submit">Enviar formulario</button>

    </form>

@endsection