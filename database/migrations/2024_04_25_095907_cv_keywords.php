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
        Schema::create('cv_keywords', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cvs_id');
            $table->unsignedBigInteger('keyword_id');
            $table->timestamps();
    
            $table->foreign('cvs_id')->references('id')->on('cvs')->onDelete('cascade');
            $table->foreign('keyword_id')->references('id')->on('keywords')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cvs_keywords');
    }
};
