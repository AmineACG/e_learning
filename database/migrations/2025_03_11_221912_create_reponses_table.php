<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_reponses_table.php
public function up()
{
    Schema::create('reponses', function (Blueprint $table) {
        $table->id();
        $table->text('contenu');
        $table->timestamp('date_post');
        $table->unsignedBigInteger('etudiant_id')->nullable();
        $table->unsignedBigInteger('professeur_id')->nullable();
        $table->unsignedBigInteger('question_id');
        $table->timestamps();

        // Foreign keys
        $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
        $table->foreign('professeur_id')->references('id')->on('professeurs')->onDelete('cascade');
        $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reponses');
    }
};
