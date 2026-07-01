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
        Schema::create('AlumnesOfertes', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('alumne_id');
            $table->bigInteger('oferta_id');
            $table->date('data_interes')->nullable();
            $table->text('vist_empresa')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('AlumnesOfertes');
    }
};
