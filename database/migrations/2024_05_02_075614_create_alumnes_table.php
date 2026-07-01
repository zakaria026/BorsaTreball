<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Alumnes', function (Blueprint $table) {            
            $table->id('alumne_id');
            $table->string('nom')->nullable();
            $table->string('primer_cognom')->nullable();
            $table->string('segon_cognom')->nullable();
            $table->string('dni')->nullable();
            $table->string('adreca')->nullable();
            $table->string('codi_postal')->nullable();
            $table->string('municipi')->nullable();
            $table->string('provincia')->nullable();
            $table->date('data_naixement')->nullable();
            $table->string('correu_electronic')->nullable();
            $table->string('primer_telefon')->nullable();
            $table->string('segon_telefon')->nullable();
            $table->boolean('carnet_conduir')->nullable();
            $table->string('idioma1')->nullable();
            $table->string('idioma2')->nullable();
            $table->string('idioma3')->nullable();
            $table->string('idioma4')->nullable();
            $table->string('observacions')->nullable();
            $table->string('codi_acces')->nullable();
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
        Schema::dropIfExists('Alumnes');
    }
}