@extends('layouts.plantilla')

@section('title', 'Creador de marcas')

<h1>Creador de marcas</h1>

@section('content')

    <form action="{{route('productos.store')}}" method="POST">
    @csrf

        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>


        <br>

        <!-- <label>
            Marca:<br>
            <input type="text" name="marca_id" value="{{old('marca_id')}}">
        </label> -->

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