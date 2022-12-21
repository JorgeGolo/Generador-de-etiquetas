<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;


    // al usar el método create dentro de la función store del MarcaController
    // es necesario especificar aquí (en el modelo) los campos que se pueden rellenar
    // usando esta variable protegida $fillable

    protected $fillable = ['name','registrosan'];

        public function productos() {
 
            return $this->hasMany(Producto::class);
 
        }

}
