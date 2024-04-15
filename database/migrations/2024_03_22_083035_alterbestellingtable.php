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
        Schema::table('bestellingen', function (Blueprint $table) {
            $table->dropColumn('aantal_0tm/3');
            $table->dropColumn('aantal_3tm/16');
            $table->dropColumn('aantal_16_jaar_en_ouder');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bestellingen', function (Blueprint $table) {
            $table->integer('aantal_0tm/3');
            $table->integer('aantal_3tm/16');
            $table->integer('aantal_16_jaar_en_ouder');
        });
    }
};