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
                    <option value="{{$prod->id}}" {{$prod->name==$etiqueta->producto->name ? 'selected' : ''}}>{{$prod->name}} // {{$prod->marca->name}}</option>
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
                <!-- <input id="inputpeso" onKeyUp="modificar(this)" type="text" name="peso" value="{{old('peso',$etiqueta->peso)}}"> -->
                <input id="inputpeso" type="text" onKeyUp="mmoddos()" name="peso" value="{{old('peso',$etiqueta->peso)}}">
            </td>
            
        </tr>

        <tr>
            <td>
                Precio kilo:
            </td>
            <td>
                <input id="inputpreciokilo" type="text" onKeyUp="mmoddos()" name="preciokilo" value="{{old('preciokilo',$etiqueta->preciokilo)}}">
            </td>
        </tr>

        <tr>
            <td>
                Precio:
            </td>
            <td>
                <input id="inputprecio" onKeyUp="calcularprecio()" type="text" name="precio" value="{{old('precio',$etiqueta->precio)}}">
            </td>
        </tr>
    </table>

        <button type="submit">Enviar formulario</button>

    </form>

@endsection