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
        Schema::create('chi_tiet_ao_cuois', function (Blueprint $chitietaocuoi) {
            $chitietaocuoi->id();
            $chitietaocuoi->string('image1');
            $chitietaocuoi->string('image2');
            $chitietaocuoi->string('image3');
            $chitietaocuoi->integer('id_aocuoi');
            $chitietaocuoi->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_ao_cuois');
    }
};
