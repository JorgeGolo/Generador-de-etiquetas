<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $marcas = ['Cecinas Nieto',
        'Salgot',
        'Son Dalabau',
        'La Jara',
        'Lazo',
        'Arturo Sánchez',
        'Sabores de Paterna',
        'Misenplaces',
        'Quevilsa',
        'Payoyo',
        'Aljomar',
        'El Chichero',
        '5 Jotas',
        'Ahumados Domínguez',
        'Coren'];
        
        $registros = ['RSI 10.0219/LE',
        'RSI 10.04370/B',
        'RSI 10.01423/PM',
        'RSI 10.02292/H',
        'RSI 10.02292/H',
        'RSI 1011835/SA',
        'RSI 10.0020855/CA',
        '26.016919/CA',
        'RSI 1500427/LE',
        'RSI 15/0003073/CA',
        'RSI10001590/SA',
        'RSI 10.12464/BA',
        'RSI 1000159/H',
        'RSI 12.05644/M',
        'ES 10.01400/LU'];

        $marcas = [
                ['name' => 'Cecinas Nieto', 'registrosan' => 'RSI 10.0219/LE'],
                ['name' => 'Salgot', 'registrosan' => 'RSI 10.04370/B'],
                ['name' => 'La Jara', 'registrosan' => 'RSI 10.02292/H'],
                ['name' => 'Lazo', 'registrosan' => 'RSI 10.02292/H'],
                ['name' => 'Arturo Sánchez', 'registrosan' => 'RSI 1011835/SA'],
                ['name' => 'Sabores de Paterna', 'registrosan' => 'RSI 10.0020855/CA'],
                ['name' => 'Misenplaces', 'registrosan' => '26.016919/CA'],
                ['name' => 'Quevilsa', 'registrosan' => 'RSI 1500427/LE'],
                ['name' => 'Payoyo', 'registrosan' => 'RSI 15/0003073/CA'],
                ['name' => 'Aljomar', 'registrosan' => 'RSI10001590/SA'],
                ['name' => 'El Chichero', 'registrosan' => 'RSI 10.12464/BA'],
                ['name' => '5 Jotas', 'registrosan' => 'RSI 1000159/H'],
                ['name' => 'Ahumados Domínguez', 'registrosan' => 'RSI 12.05644/M'],
                ['name' => 'Coren', 'registrosan' => 'ES 10.01400/LU']
        ];


        foreach ($marcas as $marca) {

            Marca::create($marca);

        }
                   


    }
}
