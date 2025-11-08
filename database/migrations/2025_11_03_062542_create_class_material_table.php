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
        Schema::create('academy_class_material', function (Blueprint $table) {
            // FK ke Kelas
            $table->foreignId('academy_class_id')->constrained()->onDelete('cascade');
            
            // FK ke Materi
            $table->foreignId('material_id')->constrained()->onDelete('cascade');
            
            // Composite Primary Key
            $table->primary(['academy_class_id', 'material_id'], 'class_material_pk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academy_class_material');
    }
};
