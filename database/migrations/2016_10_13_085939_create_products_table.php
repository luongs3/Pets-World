<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 200);
			$table->text('description')->nullable();
			$table->decimal('price', 8);
			$table->string('sku', 100);
			$table->text('attributes')->nullable();
			$table->integer('views')->default('0');
			$table->integer('purchased')->default('0');
			$table->string('brand', 100)->nullable();
			$table->decimal('sale_price', 8)->default('0');
			$table->integer('category_id');
			$table->tinyInteger('status')->default('1');
			$table->integer('quantity')->default('0');
			$table->string('image', 200)->nullable();
			$table->tinyInteger('sale')->default('0');
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}