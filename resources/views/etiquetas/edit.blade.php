@extends('layouts.plantilla')

@section('title', 'Editor de etiquetas')

@section('content')
    <h1>Editor de etiquetas</h1>

    <form action="{{route('etiquetas.update', $etiqueta)}}" method="POST">
    @csrf

    @method('put')

    <table>
        <tr>
            <td>
                Nombre de la etiqueta:
            </td>
            <td>
            <input type="text" name="name" value="{{old('name',$etiqueta->name)}}">
            </td>
        </tr>
        <tr>
            <td>
                Nombre del producto:
            </td>
            <td>
                <select name="producto_id">
                @foreach ($productos as $prod)
                    <option value="{{$prod->id}}" {{$prod->name==$etiqueta->producto->name ? 'selected' : ''}}>{{$prod->name}}</option>
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
                    <option value="{{$marc->id}}" {{$marc->name==$etiqueta->producto->marca->name ? 'selected' : ''}}>{{$marc->name}}</option>
                @endforeach
                </select>
            </td>
        </tr>

        <tr>
            <td>
                Adicional:
            </td>
            <td>
                <input type="text" name="adicional" value="{{old('name',$etiqueta->adicional)}}">
            </td>
        </tr>

        <tr>
            <td>
                Fecha envasado:
            </td>
            <td>
                <input type="date" name="fechaenvasado" value="{{old('fechaenvasado',$etiqueta->fechaenvasado)}}" min="2018-01-01" max="2028-12-31">
            </td>
        </tr>

        <tr>
            <td>
                Fecha caducidad:
            </td>
            <td>
                <input type="date" name="fechacaducidad" value="{{old('fechacaducidad',$etiqueta->fechacaducidad)}}" min="2018-01-01" max="2028-12-31">
            </td>
        </tr>

        <tr>
            <td>
                Peso:
            </td>
            <td>
                <input type="text" name="peso" value="{{old('peso',$etiqueta->peso)}}">
            </td>
        </tr>

        <tr>
            <td>
                Precio kilo:
            </td>
            <td>
                <input type="text" name="preciokilo" value="{{old('preciokilo',$etiqueta->preciokilo)}}">
            </td>
        </tr>

        <tr>
            <td>
                Precio:
            </td>
            <td>
                <input type="text" name="precio" value="{{old('precio',$etiqueta->precio)}}">
            </td>
        </tr>
    </table>

        <button type="submit">Enviar formulario</button>

    </form>

@endsection