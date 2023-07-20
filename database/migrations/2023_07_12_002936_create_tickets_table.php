<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id('tc_number')->autoIncrement(); // Make passenger_id an auto-incrementing primary key
            $table->bigInteger('passenger_id')->nullable();
            $table->decimal('amount', 8, 2)->nullable();
            $table->string('start_station')->nullable();
            $table->string('end_station')->nullable();
            $table->dateTime('start_time')->nullable();
            $table->dateTime('end_time')->nullable();
            $table->integer('train_id')->nullable();
            $table->integer('seat_cat')->nullable();
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
        Schema::dropIfExists('tickets');
    }
}
