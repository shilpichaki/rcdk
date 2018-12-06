<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_master', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_broker_id')->references('id')->on('sub_broker_master');
            $table->string('name', '50');
            $table->string('branch_name', '60');
            $table->string('account_no', '50');
            $table->string('branch_code', '50');
            $table->string('ifsc', '20');
            $table->integer('micr');
            $table->string('branch_rtgs_no', '50');
            $table->string('acc_type', '20');
            $table->timestamps();
            $table->integer('is_active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_master');
    }
}
