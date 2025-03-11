<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_cours_table.php
public function up()
{
    Schema::create('cours', function (Blueprint $table) {
        $table->id();
        $table->string('titre');
        $table->text('description');
        $table->text('syllabus');
        $table->unsignedBigInteger('professeur_id');
        $table->timestamps();

        // Foreign key
        $table->foreign('professeur_id')->references('id')->on('professeurs')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cours');
    }
};
