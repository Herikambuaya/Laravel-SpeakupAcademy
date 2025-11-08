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
        Schema::create('students', function (Blueprint $table) {
            // Primary Key Kustom: NISN
            $table->string('nisn', 15)->primary(); 
            $table->string('name', 100);
            $table->string('phone', 15);
            $table->enum('education_level', ['SMA', 'SMK', 'Mahasiswa', 'Fresh Graduate']); 
            $table->text('reason')->nullable();
            
            // Foreign Key ke users table
            $table->foreignId('user_id')->unique()->constrained()->onDelete('cascade');
            // Foreign Key ke levels table
            $table->foreignId('level_id')->constrained()->onDelete('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
