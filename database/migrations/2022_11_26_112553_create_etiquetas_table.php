<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etiquetas', function (Blueprint $table) {
            $table->id(); 
            $table->string('name'); 
            $table->text('description'); 
            $table->text('adicional'); 
            $table->string('marca');
            $table->string('registrosan');
            $table->date('fechaenvasado');
            $table->date('caducidad');
            $table->decimal('peso',4,3);
            $table->decimal('preciokilo',5,2);  
            $table->decimal('precio',5,2);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etiquetas');
    }
};
