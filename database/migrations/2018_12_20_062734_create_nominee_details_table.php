<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNomineeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominee_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_broker_id')->unsigned();
            $table->string('nominee_name', '80');
            $table->string('nominee_relationship', '40');
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
        Schema::dropIfExists('nominee_details');
    }
}
