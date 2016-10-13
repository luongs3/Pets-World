<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostCategory extends Model {

	protected $table = 'post_categories';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}