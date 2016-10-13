<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesTable extends Migration {

	public function up()
	{
		Schema::create('invoices', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->tinyInteger('status')->default('1');
			$table->decimal('sum_price', 8)->default('0');
			$table->decimal('total_price', 8)->default('0');
			$table->integer('customer_id');
			$table->tinyInteger('tax')->default('0');
			$table->integer('shipping_address_id');
		});
	}

	public function down()
	{
		Schema::drop('invoices');
	}
}