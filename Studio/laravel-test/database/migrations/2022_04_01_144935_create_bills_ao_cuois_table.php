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
        Schema::create('bills_ao_cuois', function (Blueprint $billsaocuoi) {
            $billsaocuoi->id();
            $billsaocuoi->integer('user_id');
            $billsaocuoi->string('note');
            $billsaocuoi->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills_ao_cuois');
    }
};
