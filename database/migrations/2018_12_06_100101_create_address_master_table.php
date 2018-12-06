<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_master', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_broker_id')->references('id')->on('sub_broker_master');
            $table->string('present_address','255');
            $table->string('permanent_address', '255');
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
        Schema::dropIfExists('address_master');
    }
}
