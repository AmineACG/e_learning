<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_messages_contact_table.php
public function up()
{
    Schema::create('messages_contact', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('professeur_id');
        $table->unsignedBigInteger('etudiant_id');
        $table->string('title');
        $table->text('contenu');
        $table->timestamp('date_envoi');
        $table->timestamps();

        // Foreign keys
        $table->foreign('professeur_id')->references('id')->on('professeurs')->onDelete('cascade');
        $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages_contact');
    }
};
