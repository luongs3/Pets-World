<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceProduct extends Model {

	protected $table = 'invoice_products';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}