@extends('layouts.plantilla')

@section('title', 'Creador de Productos')

<h1>Creador de Productos</h1>

@section('content')

    <form action="{{route('productos.store')}}" method="POST">
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
            Marca:<br>
            <select name="marca_id">
            @foreach ($marcas as $marc)
                <option value="{{$marc->id}}">{{$marc->name}}</option>
            @endforeach
            </select>
        </label>

        <br>

        <button type="submit">Enviar formulario</button>

    </form>

@endsection