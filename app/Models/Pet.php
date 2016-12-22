<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model {

	protected $table = 'pets';
	public $timestamps = true;
	protected $fillable = ['name', 'avatar', 'status', 'disease', 'description'];

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}