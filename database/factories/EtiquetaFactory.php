<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\Marca;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etiqueta>
 */
class EtiquetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()

    
    {


        $fechaActual = date('d/m/y');
        $caducidad = date('Y-m-d' , strtotime("+3 months"));

        return [
  
            'description' => $this->faker->sentence(4),
            'adicional' => $this->faker->sentence(3),
            'fechaenvasado' => $fechaActual,
            'caducidad' => $caducidad,
            'marca_id' => rand(1, Marca::count()),
            'producto_id' => rand(1, Producto::count())

        ];
    }
}
