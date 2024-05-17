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
        Schema::create('ficha_profesor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profesor_id')->nullable();
            $table->unsignedBigInteger('ficha_id')->nullable();
            $table->foreign('profesor_id')->references('id')->on('profesors')->onDelete('cascade');
            $table->foreign('ficha_id')->references('id')->on('fichas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ficha_profesor');
    }
};
