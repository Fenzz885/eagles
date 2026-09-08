<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('schedules', function (Blueprint $table) {
        $table->id();
        $table->string('day');          // Contoh: "Selasa"
        $table->string('category');     // Contoh: "Kiddos" atau "Junior & Senior"
        $table->time('start_time');     // Contoh: "16:00:00"
        $table->time('end_time');       // Contoh: "17:30:00"
        $table->string('coach');        // Contoh: "Coach Bondan"
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
