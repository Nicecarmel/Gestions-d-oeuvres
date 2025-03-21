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
        Schema::create('oeuvres', function (Blueprint $table) {
            $table->id();
            $table->string('titre',255);
            $table->string('photo',255);
            $table->string('artiste')->nullable();
            $table->date('annee de fabrication')->nullable();
            $table->date('date acquisition')->nullable();
            $table->string('prix estime',20)->nullable();
            $table->foreignId('categorie_id')->nullable()
            ->constrained('categories');
            $table->longText('description');
            $table->longText('tags')->nullable();
            $table->text('slug');
            $table->timestamps();







        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oeuvres');
    }
};
