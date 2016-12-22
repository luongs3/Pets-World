<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSocialUsersTable extends Migration {

	public function up()
	{
		Schema::create('social_users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->tinyInteger('provider_id');
			$table->string('provider', 100);
			$table->integer('user_id');
		});
	}

	public function down()
	{
		Schema::drop('social_users');
	}
}