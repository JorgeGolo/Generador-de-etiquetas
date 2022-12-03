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
        $etiqueta->name='Paleta 5 Jotas'; 
        $etiqueta->description='description'; 
        $etiqueta->adicional='Conservar en frío';
        $etiqueta->marca='5 Jotas';
        $etiqueta->registrosan='RXhygy56';
        $etiqueta->fechaenvasado=$fechaActual;
        $etiqueta->caducidad=$caducidad;
        $etiqueta->peso=0.080;
        $etiqueta->preciokilo=149.00;
        $etiqueta->precio=11.92;

        $etiqueta->save();

        $etiqueta2 = new Etiqueta();
        $etiqueta2->name='Jamón 5 Jotas'; 
        $etiqueta2->description='description'; 
        $etiqueta2->adicional='Conservar en frío';
        $etiqueta2->marca='5 Jotas';
        $etiqueta2->registrosan='RXhygy56';
        $etiqueta2->fechaenvasado=$fechaActual;
        $etiqueta2->caducidad=$caducidad;
        $etiqueta2->peso=0.100;
        $etiqueta2->preciokilo=189.00;
        $etiqueta2->precio=18.90;

        $etiqueta2->save();
        
    }
}
