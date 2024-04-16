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
        Schema::table('game_information', function (Blueprint $table) {
            // 
            $table->string('match_format')->nullable()->after("place");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('game_information', function (Blueprint $table) {
            //
            $table->dropColumn('match_format');
        });
    }
};
