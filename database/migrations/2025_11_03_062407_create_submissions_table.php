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
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->text('answer_text')->nullable();
            $table->string('file_path')->nullable(); // Untuk audio/video/dokumen
            $table->integer('score')->nullable(); // Nilai dari Mentor
            $table->text('mentor_feedback')->nullable();

            // FK ke Tugas mana unggahan ini
            $table->foreignId('assignment_id')->constrained()->onDelete('cascade');
            
            // FK ke Siswa mana yang mengunggah
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
        Schema::dropIfExists('submissions');
    }
};
