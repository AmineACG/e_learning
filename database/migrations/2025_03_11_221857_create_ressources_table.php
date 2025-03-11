<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_ressources_table.php
public function up()
{
    Schema::create('ressources', function (Blueprint $table) {
        $table->id();
        $table->string('nom_fichier');
        $table->string('type');
        $table->integer('taille');
        $table->unsignedBigInteger('cours_id');
        $table->timestamp('date_upload');
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
        Schema::dropIfExists('ressources');
    }
};
