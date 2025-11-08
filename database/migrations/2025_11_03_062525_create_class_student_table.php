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
        Schema::create('academy_class_student', function (Blueprint $table) {
            // FK ke Kelas
            $table->foreignId('academy_class_id')->constrained()->onDelete('cascade');
            
            // FK ke Siswa (menggunakan NISN)
            $table->string('student_nisn', 15);
            $table->foreign('student_nisn')->references('nisn')->on('students')->onDelete('cascade');
            
            // Composite Primary Key
            $table->primary(['academy_class_id', 'student_nisn'], 'class_student_pk');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academy_class_student');
    }
};
