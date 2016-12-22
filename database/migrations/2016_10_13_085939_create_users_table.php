<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('email', 100)->nullable();
			$table->string('name', 100);
			$table->string('avatar', 200)->nullable();
			$table->string('password', 60);
			$table->tinyInteger('role')->default('1');
			$table->string('confirmed')->nullable();
			$table->string('confirmation_code')->nullable();
			$table->string('remember_token')->nullable();
			$table->integer('unread_message')->default('0');
			$table->tinyInteger('notification')->default('0');
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}