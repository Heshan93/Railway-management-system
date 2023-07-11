<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_stations', function (Blueprint $table) {
            $table->id('st_id');
            $table->string('st_name');
            $table->string('train_no');
            $table->string('st_arr_time');
            $table->string('st_dep_time');
            $table->string('start_at');
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
        Schema::dropIfExists('train_stations');
    }
}
