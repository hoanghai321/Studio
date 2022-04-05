<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_anh_cuois', function (Blueprint $chitietanhcuoi) {
            $chitietanhcuoi->id();
            $chitietanhcuoi->string('image1');
            $chitietanhcuoi->string('image2');
            $chitietanhcuoi->string('image3');
            $chitietanhcuoi->integer('id_anhcuoi');
            $chitietanhcuoi->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_anh_cuois');
    }
};
