<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Restaurant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function ( Blueprint $table ) {
            $table->increments('id');
            $table->string('name');
            $table->string('street');
            $table->string('city');
            $table->string('zip');
            $table->string('type')->default('restaurant');
            $table->string('website');
            $table->string('main_phone');
            $table->integer('stars');
            $table->integer('price_tier');
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
        //
        Schema::dropIfExists('restaurants');
    }
}
