<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubBrokerMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_broker_master', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', '100');
            $table->string('identity', '12');
            $table->string('introducer_name', '150')->nullable();
            $table->string('introducer_code', '50')->nullable();
            $table->string('present_address', '180');
            $table->string('permanent_address', '180');
            $table->integer('present_address_pin');
            $table->integer('permanent_address_pin');
            $table->date('dob');
            $table->integer('age');
            $table->integer('phone_no');
            $table->string('email');
            $table->integer('home_no');
            $table->integer('fax_no');
            $table->string('education', '180');
            $table->string('proff_qualification', '180')->nullable();
            $table->string('amfi_no');
            $table->string('irda_no');
            $table->string('other_qualification');
            $table->string('occupation');
            $table->integer('exp_year');
            $table->string('product');
            $table->string('pan_no');
            $table->integer('bank_details')->unsigned();
            $table->foreign('bank_details')->references('id')->on('bank_master');
            $table->string('nominee_name', '50');
            $table->string('nominee_relation', '20');
            $table->integer('is_active');
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
        Schema::dropIfExists('sub_broker_master');
    }
}
