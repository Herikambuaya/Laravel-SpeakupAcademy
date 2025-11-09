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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['present', 'absent', 'late'])->default('absent');
            $table->dateTime('check_in_time')->nullable();
            
            // FK ke Kelas mana presensi ini
            $table->foreignId('academy_class_id')->constrained()->onDelete('cascade');
            
            // FK ke Siswa mana presensi ini
            $table->string('student_nisn', 15);
            $table->foreign('student_nisn')->references('nisn')->on('students')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
