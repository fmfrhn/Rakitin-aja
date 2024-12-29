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
        Schema::create('recommendations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('category_id')->constrained('question_categories')->cascadeOnDelete();
            $table->string('tipe_spesifikasi');
            $table->string('spesifikasi');
            $table->string('link');
            $table->string('image');
            $table->bigInteger('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recommendations');
    }
};
