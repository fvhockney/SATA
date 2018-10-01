<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('trip_id')->nullable();
          $table->foreign('trip_id')->references('id')->on('trips');
          $table->string('status');
          $table->double('price', null, 2);
          $table->boolean('paid');
          $table->string('confirmation_number');
          $table->date('confirmation_date');
          $table->date('booked_date');
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
        Schema::drop('bookings');
    }
}
