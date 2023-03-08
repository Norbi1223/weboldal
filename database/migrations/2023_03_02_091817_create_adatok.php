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
        Schema::create('adatok', function (Blueprint $table) {
            $table->id('ID');
            $table->integer('para');
            $table->integer('homer');
            $table->integer('magas');
            $table->dateTime('datum', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adatok');
    }
};
