<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OauthClient extends Model {

	protected $table = 'oauth_clients';
	public $timestamps = true;
	protected $fillable = ['user_id', 'name', 'secret', 'redirect', 'personal_access_client', 'password_client'];

	use SoftDeletes;

	protected $dates = ['deleted_at'];

    public function accessTokens()
    {
        $this->hasMany(AccessToken::class);
	}
}