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
        Schema::create('bills_anh_cuoi_details', function (Blueprint $billsanhcuoi_detail) {
            $billsanhcuoi_detail->id();
            $billsanhcuoi_detail->integer('billsanhcuoi_id');
            $billsanhcuoi_detail->integer('anhcuoi_id');
            $billsanhcuoi_detail->double('price');
            $billsanhcuoi_detail->integer('quantity');
            $billsanhcuoi_detail->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills_anh_cuoi_details');
    }
};
