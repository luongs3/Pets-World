<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 100);
			$table->integer('parent_id')->nullable();
			$table->text('description')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('categories');
	}
}