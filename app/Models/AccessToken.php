<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccessToken extends Model {

	protected $table = 'access_tokens';
	public $timestamps = true;
	protected $fillable = ['client_id', 'access_token', 'resource_id', 'name', 'scopes', 'revoked'];
}