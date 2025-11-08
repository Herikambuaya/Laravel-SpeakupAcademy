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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount_paid', 10, 2);
            $table->enum('status', ['pending', 'paid', 'failed']);

            // FK ke Siswa (Student)
            $table->string('student_nisn', 15);
            $table->foreign('student_nisn')->references('nisn')->on('students')->onDelete('restrict');

            // FK ke Paket yang dibeli
            $table->foreignId('package_id')->constrained()->onDelete('restrict');

            // FK ke Batch (Angkatan) tempat siswa didaftarkan
            $table->foreignId('batch_id')->constrained()->onDelete('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
