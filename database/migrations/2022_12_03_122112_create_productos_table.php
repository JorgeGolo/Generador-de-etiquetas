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
        Schema::create('productos', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->timestamps();

            // nullable y nullOnDelete so necesarias por si borramos una marca...
            // es el comportamiento de la
            // restricción de integridad referencial
            // https://es.stackoverflow.com/questions/105890/qu%c3%a9-significa-cascade-set-null-restrict-no-action-en-mysql
            // https://stackoverflow.com/questions/20869072/laravel-schema-ondelete-set-null

            // en la tabla productos también hemos aplicado estos métodos
            
            $table->foreignId('marca_id')->nullable()->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
