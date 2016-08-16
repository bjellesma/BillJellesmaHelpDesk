<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table){
          $table->increments('id');
          $table->string('email', 255);
          $table->string('username', 255);
          $table->string('password');
          $table->string('first_name', 255)->nullable();
          $table->string('last_name', 255)->nullable();
          $table->string('remember_token')->nullable();
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
        Schema::drop('users');
    }
}
