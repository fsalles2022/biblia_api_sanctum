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
        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            $table->string('chapter_name');
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('testament_id');
            $table->timestamps();
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('testament_id')->references('id')->on('testaments');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapters');
    }
};
