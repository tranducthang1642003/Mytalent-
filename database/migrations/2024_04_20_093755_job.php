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
       Schema::create('job', function (Blueprint $table) {
            $table->id();
            $table->string('vitri');
            $table->string('congty');
            $table->double('soluong');
            $table->string('lamviec');
            $table->string('diachi');
            $table->string('loaihopdong');
            $table->string('kynang');
            $table->string('kinhnghiem');
            $table->string('nganhnghe');
            $table->double('luong');
            $table->boolean('hinhthucluong');
            $table->string('link');
            $table->string('trangthai')->default('Đang tuyển');
            $table->rememberToken();
            $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job');
    }
};
