<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable($value=true);
            $table->string('author', 50)->nullable($value=true);
            $table->string('author_email', 150)->nullable($value=true);
            $table->string('title', 50);
            $table->string('subtitle', 150);
            $table->string('slug', 50)->unique();
            $table->text('content');
            $table->string('display_img', 50)->nullable($value=true);
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
        Schema::dropIfExists('posts');
    }
}
