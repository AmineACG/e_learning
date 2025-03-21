<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_questions_table.php
public function up()
{
    Schema::create('questions', function (Blueprint $table) {
        $table->id();
        $table->text('contenu');
        $table->timestamp('date_post');
        $table->unsignedBigInteger('etudiant_id');
        $table->unsignedBigInteger('forum_id');
        $table->timestamps();

        // Foreign keys
        $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
        $table->foreign('forum_id')->references('id')->on('forums')->onDelete('cascade');
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
