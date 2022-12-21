@extends('layouts.plantilla')

@section('title', 'Editor de marcas')

@section('content')
    <h1>Editor de marcas</h1>

    <form action="{{route('productos.update', $producto)}}" method="POST">
    @csrf

    @method('put')

        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{old('name',$producto->name)}}">
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
                <option value="{{$marc->id}}" {{$marc->name==$producto->marca->name ? 'selected' : ''}}>{{$marc->name}}</option>
            @endforeach
            </select>
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