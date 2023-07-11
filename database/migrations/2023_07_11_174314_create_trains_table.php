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
            $table->id('train_no');
            $table->string('train_name');
            $table->string('seat_cat_1');
            $table->string('seat_cat_2');
            $table->string('seat_cat_3');
            $table->string('start_at');
            $table->string('end_at');
            $table->string('status');
            $table->string('delays');
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
