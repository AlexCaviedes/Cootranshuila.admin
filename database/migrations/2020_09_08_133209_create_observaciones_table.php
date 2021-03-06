<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObservacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observaciones', function (Blueprint $table) {
            $table->id();
            $table->string('Observaciones',250)->nullable();
            $table->date('FechaObservacion')->nullable();
            /* 
                Relaciones
            */
            $table->foreignId('equipos_id')
                ->constrained('equipos')
                ->onDelete('cascade');

            $table->foreignId('users_id')
                ->constrained('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('observaciones');
    }
}
