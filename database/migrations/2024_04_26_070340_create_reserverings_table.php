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
        Schema::create('reserverings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('accomodatie_id');
            $table->string('aantal_personen');
            $table->date('aankomst_datum');
            $table->date('vertrek_datum');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserverings');
    }
};