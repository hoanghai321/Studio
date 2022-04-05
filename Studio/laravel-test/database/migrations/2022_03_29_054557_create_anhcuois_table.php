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
        Schema::create('anhcuois', function (Blueprint $anhcuoi) {
            $anhcuoi->id();
            $anhcuoi->string('name');
            $anhcuoi->double('price');
            $anhcuoi->string('image');
            $anhcuoi->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anhcuois');
    }
};
