<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoiceProductsTable extends Migration {

	public function up()
	{
		Schema::create('invoice_products', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('invoice_id');
			$table->string('product_id');
		});
	}

	public function down()
	{
		Schema::drop('invoice_products');
	}
}