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
            $table->string('name');
            $table->string('gioitinh');
            $table->string('sdt');
            $table->string('email');
            $table->string('date');
            $table->string('diachi');
            $table->string('link');
            $table->string('daihoc');
            $table->text('truonghoc'); // Sử dụng kiểu dữ liệu json
            $table->string('hinhthucluong');
            $table->string('chungchi');
            $table->string('nghanhnghe');
            $table->string('luong');
            $table->string('mucluong');
            $table->text('vitri');
            $table->rememberToken();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
