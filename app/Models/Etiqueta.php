<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Etiqueta extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'producto_id', 'adicional', 'fechaenvasado', 'fechacaducidad', 'peso', 'preciokilo', 'precio'];

    public function producto() {

        return $this->belongsTo(Producto::class);

    }

    // protected function peso(): Attribute {

    //     return new Attribute( 

    //         get: function($value) {
    //             number_format($value, 3, ".", "");
    //         },

    //         set: function($value) {
    //             number_format($value, 3, ".", "");
    //         }
    //     );

    // }

    // Mutadores para guardar bien los campos en la base de datos
    // así se pueden instroducir decimales con comas y se sustituirán con puntos.
    // no validamos de momento esos campos del formulario

    // después de meditarlo un poco... no se puede sacar el $value para hacer un condicional para los tres campos
    
    public function setPesoAttribute($value)
        {
            if ($value!="") {

                $value = str_replace(',', '.', $value);
                $this->attributes['peso'] = number_format($value, 3, ".", "");

            }

        }

        public function setPrecioAttribute($value)
        {

            if ($value!="") {

                $value = str_replace(',', '.', $value);
                $this->attributes['precio'] = number_format($value, 2, ".", "");

            }
        }
        
        public function setPreciokiloAttribute($value)
        {
            if ($value!="") {

                $value = str_replace(',', '.', $value);
                $this->attributes['preciokilo'] = number_format($value, 2, ".", "");

            }

        }

        // public function getPesoAttribute($value)
        // {
        //     $this->attributes['peso'] = number_format($value, 3, ".", "");
        // }


}
