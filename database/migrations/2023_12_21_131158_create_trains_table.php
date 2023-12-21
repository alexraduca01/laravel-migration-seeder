<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('company', 100);
            $table->string('departure_station', 255);
            $table->string('arrival_station', 255);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->integer('train_code', 10)->unsigned()->unique();
            $table->integer('carriages')->unsigned();
            $table->tinyInteger('on_time')->unsigned()->default(0);
            $table->tinyInteger('cancelled')->unsigned();

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
        Schema::dropIfExists('trains');
    }
};
