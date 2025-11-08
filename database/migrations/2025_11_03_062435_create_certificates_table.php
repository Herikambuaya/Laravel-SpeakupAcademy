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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('certificate_code', 50)->unique(); 
            $table->decimal('grade_point_average', 5, 2); 
            $table->date('issue_date');
            $table->string('file_path')->nullable(); 

            // FK ke Peserta (Student)
            $table->string('student_nisn', 15);
            $table->foreign('student_nisn')->references('nisn')->on('students')->onDelete('cascade');
            
            // FK ke Batch (Angkatan)
            $table->foreignId('batch_id')->constrained('batches')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
