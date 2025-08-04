<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('moods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('mood_type'); // Happy, Sad, Calm, etc.
            $table->string('description')->nullable(); // Description of the mood
            $table->text('notes')->nullable(); // Additional notes
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('moods');
    }
};
