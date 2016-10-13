<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('post_categories', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 200);
			$table->text('description')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('post_categories');
	}
}