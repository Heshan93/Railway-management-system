<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id('train_id');
            $table->string('train_name');
            $table->integer('seat_cat_1');
            $table->integer('seat_cat_2');
            $table->integer('seat_cat_3');
            $table->dateTime('start_time');
            $table->string('start_station');
            $table->dateTime('end_station');
            $table->string('arrv_in');
            $table->dateTime('end_time');
            $table->dateTime('end_dly_at');
            $table->boolean('status')->default(0);
            $table->string('routs');
            $table->time('delays');
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
}
