<?php

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
        Schema::create('posts', function(Blueprint $table){
          $table->increments('id');
          $table->string('title', 255);
          $table->string('slug', 255);
          $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
          $table->boolean('draft');
          $table->text('text');
          $table->integer('replies')->unsigned();
          $table->string('thumbnail', 255)->default('Thumbnail-default.png');
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
        Schema::drop('posts');
    }
}
