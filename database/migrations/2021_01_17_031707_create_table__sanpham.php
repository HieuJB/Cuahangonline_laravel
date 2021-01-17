<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table__sanpham', function (Blueprint $table) {
            $table->id();
            $table->String('tensanpham');
            $table->String('gia');
            $table->String('gioitinh');
            $table->String('soluong');
            $table->String('thoigianbh');
            $table->String('hinhanh');
            $table->String('slug_sp');
            $table->String('mota');
            $table->String('id_phanloai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table__sanpham');
    }
}
