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
        Schema::create('livres', function (Blueprint $table) {
       
            $table->id();
    $table->string('titre', 250)->unique();
    $table->string('isbn', 250)->unique();
    $table->string('imagelivre', 250);
    $table->string('prix', 50);
    $table->string('description', 250);
    $table->integer('qteStock');
          $table->unsignedBigInteger('categorieID');
            $table->foreign('categorieID')->references('id')
                       ->on('categories')
                         ->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livres');
    }
};
