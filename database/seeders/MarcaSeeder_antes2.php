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
        $marca = new Marca();
        $marca->name="5 Jotas";
        $marca->registrosan="RXhygy56";
        $marca->save();

        $marca2 = new Marca();
        $marca2->name="Sánchez Romero Carvajal";
        $marca2->registrosan="GHuty875E";
        $marca2->save();


    }
}
