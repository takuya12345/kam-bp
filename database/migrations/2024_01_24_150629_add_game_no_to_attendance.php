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
        Schema::table('attendance', function (Blueprint $table) {
            // attendanceテーブル、game_noカラムを追加
            $table->unsignedBigInteger('game_no')->after('id');
            // game_informationテーブルのidカラムを外部キーとして設定
            $table->foreign('game_no')->references('id')->on('game_information');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('attendance', function (Blueprint $table) {
            // 
            $table->dropColumn('game_no');
        });
    }
};
