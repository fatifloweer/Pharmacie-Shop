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
        Schema::create('complements', function (Blueprint $table) {
            $table->id('idcomplement');
            $table->string('nom');
            $table->string('image');
            $table->string('prix');
            $table->string('description');
            $table->string('marque');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complements');
    }
};
