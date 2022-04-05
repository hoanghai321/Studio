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
        Schema::create('aocuois', function (Blueprint $aocuoi) {
            $aocuoi->id();
            $aocuoi->string('name');
            $aocuoi->double('price');
            $aocuoi->string('image');
            $aocuoi->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aocuois');
    }
};
