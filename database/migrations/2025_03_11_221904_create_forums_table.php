<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_forums_table.php
public function up()
{
    Schema::create('forums', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('cours_id');
        $table->timestamps();

        // Foreign key
        $table->foreign('cours_id')->references('id')->on('cours')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forums');
    }
};
