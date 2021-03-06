<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('username')->unique();
      $table->string('email')->unique();
      $table->string('password');
      $table->string('image')->default('default.png');
      $table->string('about')->nullable();
      $table->boolean('status')->default(1);
      $table->rememberToken();
      $table->timestamp('email_verified_at')->nullable();
      $table->timestamps();
    });
  }

  public function down()
  {
      Schema::dropIfExists('users');
  }
}
