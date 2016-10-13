<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminMessagesTable extends Migration {

	public function up()
	{
		Schema::create('admin_messages', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->text('content')->nullable();
			$table->tinyInteger('target')->default('1');
			$table->tinyInteger('read')->default('0');
		});
	}

	public function down()
	{
		Schema::drop('admin_messages');
	}
}