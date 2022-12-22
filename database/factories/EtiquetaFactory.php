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
        $fechacaducidad = date('Y-m-d' , strtotime("+6 months"));

        return [
  
            'name' => $this->faker->sentence(3),
            'adicional' => $this->faker->sentence(3),
            'fechaenvasado' => $fechaActual,
            'caducidad' => 6,
            'fechacaducidad' => $fechacaducidad,
            'producto_id' => rand(1, Producto::count()),
            'peso' => $this->faker->randomElement([0.080,0.100])

        ];
    }
}
