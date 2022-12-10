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
            $table->text('description')->nullable(); 
            $table->text('adicional')->nullable(); 

            $table->date('fechaenvasado');
            $table->date('caducidad');
            $table->decimal('peso',4,3)->nullable(); ;
            $table->decimal('preciokilo',5,2)->nullable(); ;  
            $table->decimal('precio',5,2)->nullable(); ;
            $table->timestamps(); 

            $table->foreignId('marca_id')->constrained();
            $table->foreignId('producto_id')->constrained();

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
