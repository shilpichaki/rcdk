<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubBrokerPolicyMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_broker_policy_master', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_broker_id')->unsigned();
            $table->string('policy_holder_name');
            $table->string('category');
            $table->string('product_name');
            $table->string('policy_amount');
            $table->string('issuing_status');
            $table->timestamps();

            $table->foreign('sub_broker_id')->references('id')->on('sub_broker_master');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_broker_policy_master');
    }
}
