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
        Schema::create('bills_anh_cuois', function (Blueprint $billsanhcuoi) {
            $billsanhcuoi->id();
            $billsanhcuoi->integer('user_id');
            $billsanhcuoi->string('note');
            $billsanhcuoi->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills_anh_cuois');
    }
};
