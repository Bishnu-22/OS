<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_tbl', function (Blueprint $table) {
            $table->increments('customer_id');
             $table->string('customer_name');
             $table->string('customer_phone');
             $table->string('customer_email');
             $table->string('customer_location');
             $table->string('customer_food');
             $table->string('customer_date');
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
        Schema::dropIfExists('customer_tbl');
    }
}
