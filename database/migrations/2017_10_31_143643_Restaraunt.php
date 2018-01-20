<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Restaraunt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaraunts', function (Blueprint $table){
          $table -> increments('id');
          $table -> string('name');
          $table -> string('street_number');
          $table -> string('street');
          $table -> string('city');
          $table -> string('zip');
          $table -> string('type')->default('restaraunt');
          $table -> string('website');
          $table -> string('main_phone');
          $table -> integer('stars');
          $table -> integer('price');
          $table -> double('lat',10,8);
          $table -> double('long',10,8);
          $table -> dateTime('created_at');
          $table -> dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Scheme::drop('restaraunts');
    }
}
