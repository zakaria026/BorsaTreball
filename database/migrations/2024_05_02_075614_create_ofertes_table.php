<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Ofertes', function (Blueprint $table) {            
            $table->id('oferta_id');
            $table->bigInteger('empresa_id')->nullable();
            $table->string('horari')->nullable();
            $table->date('incorporacio')->nullable();
            $table->float('sou')->nullable();
            $table->bigInteger('edat')->nullable();
            $table->string('idioma1')->nullable();
            $table->string('idioma2')->nullable();
            $table->string('idioma3')->nullable();
            $table->string('idioma4')->nullable();
            $table->string('tipus_contracte')->nullable();
            $table->date('caducitat_oferta')->nullable();
            $table->string('descripcio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Ofertes');
    }
};
