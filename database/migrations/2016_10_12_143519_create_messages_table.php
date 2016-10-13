<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	public function up()
	{
		Schema::create('messages', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('user_id');
			$table->text('content')->nullable();
			$table->tinyInteger('type')->default('1');
			$table->boolean('read')->default(0);
			$table->integer('admin_messages');
		});
	}

	public function down()
	{
		Schema::drop('messages');
	}
}