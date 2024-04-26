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
        Schema::table('openingstijdens', function (Blueprint $table) {
            $table->string('dag');
            $table->string('opening');
            $table->string('sluiting');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('openingstijdens', function (Blueprint $table) {
            $table->dropColumn('dag');
            $table->dropColumn('opening');
            $table->dropColumn('sluiting');
        });
    }
};
