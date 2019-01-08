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
            $table->integer('introducer_id');
            $table->integer('address_id');
            $table->date('dob');
            $table->integer('age');
            $table->integer('phone_no');
            $table->string('email');
            $table->integer('home_no');
            $table->integer('fax_no');
            $table->string('password');
            $table->string('education', '180');
            $table->string('proff_qualification', '180')->nullable();
            $table->string('amfi_no');
            $table->integer('filename');
            $table->string('irda_no');
            $table->string('other_qualification');
            $table->string('occupation');
            $table->integer('exp_year');
            $table->string('product');
            $table->string('pan_no');
            $table->integer('aadhar_no');
            $table->integer('bank_id');
            $table->integer('nominee_id');
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
        Schema::dropIfExists('sub_broker_details');
    }
}
