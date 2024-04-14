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
        Schema::create('cv', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id')->nullable(); 
            $table->foreign('job_id')->references('id')->on('job')->onDelete('cascade');
            $table->string('name');
            $table->string('gioitinh');
            $table->string('phone');
            $table->string('email');
            $table->date('date');
            $table->string('Address');
            $table->string('Education');
            $table->text('school'); 
            $table->string('Language');
            $table->string('Certificate');
            $table->text('location');
            $table->string('career');
            $table->string('skills');
            $table->string('Currentsalary');
            $table->string('Desiredsalary');
            $table->string('Image');
            $table->string('file');
            $table->text('keyword');
            $table->text('Link');
            $table->rememberToken();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv');
    }
};
