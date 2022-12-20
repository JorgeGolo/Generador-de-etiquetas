@extends('layouts.plantilla')

@section('title', 'Creador de marcas')

@section('content')
    <h1>Creador de marcas</h1>

    <form action="{{route('marcas.store')}}" method="POST">
    @csrf

        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <label>
            Registro sanitario:<br>
            <input type="text" name="regsan" value="{{old('regsan')}}">
        </label>

        @error('regsan')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <button type="submit">Enviar formulario</button>

    </form>

@endsection