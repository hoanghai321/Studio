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
        Schema::create('bills_ao_cuoi_details', function (Blueprint $billsaocuoi_detail) {
            $billsaocuoi_detail->id();
            $billsaocuoi_detail->integer('billsaocuoi_id');
            $billsaocuoi_detail->integer('aocuoi_id');
            $billsaocuoi_detail->double('price');
            $billsaocuoi_detail->integer('quantity');
            $billsaocuoi_detail->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills_ao_cuoi_details');
    }
};
