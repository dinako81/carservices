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
        Schema::create('cats', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->unsignedTinyInteger('colors_count');
            // kiek spalvu tures kategorija
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('cats');
    }
};