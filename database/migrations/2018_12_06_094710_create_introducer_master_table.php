<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntroducerMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('introducer_master', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_broker_id')->references('id')->on('sub_broker_master');
            $table->string('introducer_name', '60');
            $table->string('introducer_code');
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
        Schema::dropIfExists('introducer_master');
    }
}
