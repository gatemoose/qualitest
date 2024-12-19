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
        Schema::create('services_page', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('blue_phrase', 50);
            $table->string('text1', 255);
            $table->string('text2', 255);
            $table->string('text3', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_page');
    }
};
