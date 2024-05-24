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
        Schema::table('attracties', function (Blueprint $table) {
            $table->string('duration');
            $table->string('min_height');
            $table->string('height');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('attracties', function (Blueprint $table) {
            $table->dropColumn('duration');
            $table->dropColumn('min_height');
            $table->dropColumn('height');
        });
    }
};
