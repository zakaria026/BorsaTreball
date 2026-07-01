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
        Schema::create('Empreses', function (Blueprint $table) {
            $table->id('empresa_id');
            $table->string('nif')->nullable();
            $table->string('nom')->nullable();
            $table->string('correu_electronic')->nullable();
            $table->string('persona_contacte')->nullable();
            $table->string('primer_telefon_contacte')->nullable();
            $table->string('segon_telefon_contacte')->nullable();
            $table->string('adreca')->nullable();
            $table->string('codi_postal')->nullable();
            $table->string('municipi')->nullable();
            $table->string('provincia')->nullable();
            $table->string('codi_acces')->nullable();
            $table->boolean('validada')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Empreses');
    }
};
