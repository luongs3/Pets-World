<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeaturedProductsTable extends Migration {

	public function up()
	{
		Schema::create('featured_products', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('product_id');
		});
	}

	public function down()
	{
		Schema::drop('featured_products');
	}
}