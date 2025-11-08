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
        Schema::create('academy_classes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100); // Misal: Beginner Speaking Class
            $table->string('unique_code', 10)->unique(); // Kode unik untuk join kelas
            $table->dateTime('schedule'); // Jadwal kelas live
            
            // FK ke Mentor yang mengajar
            $table->string('mentor_id', 20);
            $table->foreign('mentor_id')->references('mentor_id')->on('mentors')->onDelete('restrict');
            
            // FK ke Level (kelas hanya untuk level tertentu)
            $table->foreignId('level_id')->constrained()->onDelete('restrict');
            
            // FK ke Batch (kelas milik angkatan mana)
            $table->foreignId('batch_id')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academy_classes');
    }
};
