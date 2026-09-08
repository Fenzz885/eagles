<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('players', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('city');
        $table->date('birth_date');
        $table->string('team_category');
        $table->string('position');
        $table->string('image');
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
