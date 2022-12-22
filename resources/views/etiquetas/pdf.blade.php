@extends('layouts.pdf')

@section('content')
    
    <table class="tablaetique">
    <tr>
        <td colspan="3">
            <span class="nombreprod grandeuno">{{$etique->producto->name}}</span>
        </td>
    </tr>

    <tr class="linea"><td colspan="3"></td></tr>


    <tr>
        <td colspan="3"><span class="pequedos">{{$etique->producto->marca->registrosan}}</span></td>
    </tr>


    <tr class="tercio">
        <td><span><img src="/etiquetas/resources/imgs/logo2.jpg" alt=""></span></td>
        <td><span class="pequetres">{{$etique->producto->marca->name}}</span></td>
        <td><span><img src="/etiquetas/resources/imgs/logo1.jpg" alt=""></span></td>
    </tr>
    
    <tr class="linea"><td colspan="3"></td></tr>

    <tr class="tercio">
        <td><span class="pequedos">Nº Lote</span></td>
        <td><span class="pequedos"></span></td>
        <td><span class="pequedos">F. caducidad</span></td>
    </tr>

    <tr class="tercio">
        <td><span class="pequedos">{{$etique->fechaenvasado}}</span></td>
        <td><span class="pequedos">{{$etique->adicional}}</span></td>
        <td><span class="pequedos">{{$etique->fechacaducidad}}</span></td>
    </tr>

    <tr class="linea"><td colspan="3"></td></tr>

    <tr class="tercio">
        <td><span class="pequeuno">kg</span></td>
        <td><span class="pequeuno">€/kg</span></td>
        <td><span class="pequeuno">€</span></td>
    </tr>
    <tr class="tercio">
        <td><span class="grandeuno">{{$etique->peso}}</span></td>
        <td><span class="grandeuno">{{$etique->preciokilo}}</span></td>
        <td><span class="grandeuno">{{$etique->precio}}</span></td>
    </tr>
    

    </table>

@endsection