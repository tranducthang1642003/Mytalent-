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
            $table->unsignedBigInteger('id_job');
            $table->foreign('id_job')->references('id')->on('job')->onDelete('cascade');
            $table->string('Name');
            $table->string('Gioitinh');
            $table->string('Phone');
            $table->string('Email');
            $table->date('Date');
            $table->string('Address');
            $table->string('Education');
            $table->text('School'); 
            $table->string('Language');
            $table->string('Certificate');
            $table->text('Location');
            $table->string('Career');
            $table->string('Skills');
            $table->string('Currentsalary');
            $table->string('Desiredsalary');
            $table->string('Image');
            //checkbox bosung
            $table->string('Feight')->default('0');
            $table->string('Weight')->default('0');
            $table->string('Maritalstatus')->default('0');
            $table->string('Hometown')->default('0');
            $table->string('checkock')->default('0');
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
