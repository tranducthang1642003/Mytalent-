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
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('set');
            $table->string('phone');
            $table->string('email');
            $table->date('date');
            $table->string('address');
            $table->string('education');
            $table->text('school'); 
            $table->string('sanguage');
            $table->string('certificate');
            $table->text('location');
            $table->string('career');
            $table->string('skills');
            $table->string('currentsalary');
            $table->string('desiredsalary');
            $table->string('image');
            //checkbox bosung
            $table->string('feight');
            $table->string('weight');
            $table->string('maritalstatus');
            $table->string('hometown');
            $table->string('checkock');
            $table->timestamp('updated_at')->useCurrent(); 
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cvs');
    }
};
