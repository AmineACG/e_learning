<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_annonces_table.php
public function up()
{
    Schema::create('annonces', function (Blueprint $table) {
        $table->id();
        $table->text('contenu');
        $table->timestamp('date_publication');
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
        Schema::dropIfExists('annonces');
    }
};
