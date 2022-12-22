@extends('layouts.plantilla')

@section('title', 'Creador de etiquetas')

@section('content')

    <h1>Creador de etiquetas</h1>

    <form action="{{route('etiquetas.store')}}" method="POST">
    @csrf

        <table>
            <tr>
                <td>
                    Nombre de la etiqueta:
                </td>
                <td>
                <input type="text" name="name" value="{{old('name')}}">
                </td>
            </tr>
            <tr>
                <td>
                    Nombre del producto:
                </td>
                <td>
                    <select name="producto_id">
                    @foreach ($productos as $prod)
                        <option value="{{$prod->id}}">{{$prod->name}}</option>
                    @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    Marca:
                </td>
                <td>
                    <select name="marca_id">
                    @foreach ($marcas as $marc)
                        <option value="{{$marc->id}}">{{$marc->name}}</option>
                    @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    Adicional:
                </td>
                <td>
                    <input type="text" name="adicional" value="{{old('name')}}">
                </td>
            </tr>

            <tr>
                <td>
                    Fecha envasado:
                </td>
                <td>
                    <input type="date" name="fechaenvasado" value="{{old('fechaenvasado')}}" min="2018-01-01" max="2028-12-31">
                </td>
            </tr>

            <tr>
                <td>
                    Fecha caducidad:
                </td>
                <td>
                    <input type="date" name="fechacaducidad" value="{{old('fechacaducidad')}}" min="2018-01-01" max="2028-12-31">
                </td>
            </tr>

            <tr>
                <td>
                    Peso:
                </td>
                <td>
                    <input type="text" name="peso" value="{{old('peso')}}">
                </td>
            </tr>

            <tr>
                <td>
                    Precio kilo:
                </td>
                <td>
                    <input type="text" name="preciokilo" value="{{old('preciokilo')}}">
                </td>
            </tr>

            <tr>
                <td>
                    Precio:
                </td>
                <td>
                    <input type="text" name="precio" value="{{old('precio')}}">
                </td>
            </tr>
        </table>

        <button type="submit">Enviar formulario</button>

    </form>

@endsection