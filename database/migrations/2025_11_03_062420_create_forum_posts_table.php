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
        Schema::create('forum_posts', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            
            // FK ke User yang membuat post/komentar
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // Self-referencing FK untuk komentar/reply
            $table->foreignId('parent_id')->nullable()->constrained('forum_posts')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forum_posts');
    }
};
