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
            'adicional' => "Conservar en frío",
            'fechaenvasado' => $fechaActual,
            'caducidad' => 6,
            'fechacaducidad' => $fechacaducidad,
            'producto_id' => rand(1, Producto::count()),
            'peso' => $this->faker->randomElement([0.080,0.100])

        ];
    }

/*

Cecina
Mini fuet
Sobrasada natural
Sobrasada picante
Paleta de cebo
Paleta de cebo de campo
Jamón 75% 80 g
Loncheado paleta cebo 80 g
Loncheado jamón de cebo 80 g
Loncheado jamón monte nevado
Paleta bellota summum 80g
Jamón bellota summum 80g
Lomo bellota 50g tabanco
Paleta bellota 50g tabanco
Chicharrón especial
Carne mechada
Taquitos de queso
Chorizo ibérico bellota
Salchichón ibérico bellota
Lomo cebo de campo
Lomo 5 Jotas
Tostas
Sobrasada
Jamón cocido ibérico
Lomo en manteca
Morcón 5 Jotas
Jamón 5 Jotas
Paleta 5 Jotas
Lomo cebo de campo 80
Lomo cebo de campo 100
Lomo bellota lazo
Paleta bellota summum
Jamón Castaña
Lomo de Salmón
Taquitos de lomo
Taquitos de jamón bellota
Cocktail de Salmón
Cocktail de Gambón
Ensalada Waldorf
Ensalada de puerro
Ensaladilla rusa
Ensaladilla cangrejo
Loncheado de salmón
Loncheado de Bacalao
Surtido de ahumados
Queso trufado brie
Surtido ibérico
Queso AJM

*/

}
