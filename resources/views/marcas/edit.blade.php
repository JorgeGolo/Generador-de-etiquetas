@extends('layouts.plantilla')

@section('title', 'Editor de marcas')

@section('content')
    <h1>Editor de marcas</h1>

    <form action="{{route('marcas.update', $marca)}}" method="POST">
    @csrf

    @method('put')


        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{$marca->name}}">
        </label>
        <br>

        <label>
            Registro sanitario:<br>
            <input type="text" name="regsan"  value="{{$marca->registrosan}}">
        </label>
        <br>

        <button type="submit">Enviar formulario</button>

    </form>

@endsection