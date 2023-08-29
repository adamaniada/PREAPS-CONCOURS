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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subcategory_id')->constrained('subcategories');
            $table->text('question_text');
            $table->text('answer_text_a');
            $table->text('answer_text_b');
            $table->text('answer_text_c');
            $table->text('answer_text_d');
            $table->string('correct_answer'); // a, b, c ou d
            $table->enum('difficulty', ['easy', 'medium', 'hard']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
