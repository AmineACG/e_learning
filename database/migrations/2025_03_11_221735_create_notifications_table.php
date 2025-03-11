<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etudiant_id')->nullable(); // For student notifications
            $table->unsignedBigInteger('professeur_id')->nullable(); // For professor notifications
            $table->text('message');
            $table->string('type'); // e.g., 'email_sent', 'comment_added', 'message_sent'
            $table->timestamp('date');
            $table->boolean('vu')->default(false); // To track if the notification has been seen
            $table->timestamps();
    
            // Foreign keys
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
            $table->foreign('professeur_id')->references('id')->on('professeurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
