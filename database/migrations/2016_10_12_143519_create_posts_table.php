<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	public function up()
	{
		Schema::create('posts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('user_id');
			$table->integer('post_category_id');
			$table->string('slug');
			$table->string('title', 200);
			$table->text('content')->nullable();
			$table->datetime('published_at');
			$table->string('image', 300)->nullable();
			$table->boolean('is_post')->default(1);
		});
	}

	public function down()
	{
		Schema::drop('posts');
	}
}