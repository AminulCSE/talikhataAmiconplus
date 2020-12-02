<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('showRoomOrAshamet')->default('0');
            $table->integer('bill_no');
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('description');
            $table->integer('total_bill');
            $table->integer('advanced_amount');
            $table->string('delivery_date');
            $table->integer('delivery_status')->default('0');
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
        Schema::dropIfExists('bills');
    }
}
