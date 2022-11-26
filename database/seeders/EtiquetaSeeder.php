<?php

namespace Database\Seeders;

use App\Models\Etiqueta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fechaActual = date('d/m/y');
        $caducidad = date('Y-m-d' , strtotime("+3 months"));
        
        $etiqueta = new Etiqueta();
        $etiqueta->name='name'; 
        $etiqueta->description='description'; 
        $etiqueta->adicional='Conservar en frío';
        $etiqueta->marca='5 Jotas';
        $etiqueta->registrosan='RXhygy56';
        $etiqueta->fechaenvasado=$fechaActual;
        $etiqueta->caducidad=$caducidad;
        $etiqueta->peso=0.100;
        $etiqueta->preciokilo=149.00;
        $etiqueta->precio=18.90;

        $etiqueta->save();
    }
}
