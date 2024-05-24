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
        Schema::create('accomodaties', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('verblijf');
            $table->string('aantal_slaapkamers');
            $table->string('aantal_badkamers');
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accomodaties');
    }
};