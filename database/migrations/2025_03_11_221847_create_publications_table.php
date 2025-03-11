<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_publications_table.php
public function up()
{
    Schema::create('publications', function (Blueprint $table) {
        $table->id();
        $table->string('titre');
        $table->integer('annee');
        $table->string('type');
        $table->string('sujet');
        $table->string('lien');
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
        Schema::dropIfExists('publications');
    }
};
