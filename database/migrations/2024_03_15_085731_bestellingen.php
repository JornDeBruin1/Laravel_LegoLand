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
        Schema::create('bestellingen', function (Blueprint $table) {
            $table->id();
            $table->integer('aantal_0tm/3');
            $table->integer('aantal_3tm/16');
            $table->integer('aantal_16_jaar_en_ouder');
            $table->string('achternaam');
            $table->string('telefoonnummer');
            $table->string('email');
            $table->string('adres'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bestellingen');
    }
};