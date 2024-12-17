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
        Schema::create('child_toy', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_child');
            $table->foreign('id_child')->references('id')->on('children')->onDelete('cascade');
            $table->unsignedBigInteger('id_toy');
            $table->foreign('id_toy')->references('id')->on('toys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child_toy');
    }
};
