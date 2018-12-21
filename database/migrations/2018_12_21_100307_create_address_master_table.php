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
            $table->unsignedInteger('sub_broker_id');
            $table->string('permanent_street','180');
            $table->string('permanent_town', '180');
            $table->string('permanent_pin', '180');
            $table->unsignedInteger('permanent_state_id');
            $table->string('present_street','180');
            $table->string('present_town', '180');
            $table->string('present_pin', '180');
            $table->unsignedInteger('present_state_id');
            $table->timestamps();

            $table->foreign('sub_broker_id')->references('id')->on('sub_broker_master');
            $table->foreign('permanent_state_id')->references('id')->on('sub_broker_states');
            $table->foreign('present_state_id')->references('id')->on('sub_broker_states');

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
