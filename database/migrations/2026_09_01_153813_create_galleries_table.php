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
    Schema::create('galleries', function (Blueprint $table) {
        $table->id();
        $table->string('title');                  // Judul foto/kegiatan
        $table->string('image');                  // Path/nama file gambar
        $table->string('category')->nullable();  // Contoh: "Match", "Training", "Event"
        $table->text('caption')->nullable();      // Deskripsi singkat foto
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
