<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialUser extends Model {
    protected $fillable = [
        'user_id',
        'provider_id',
        'provider',
    ];
	protected $table = 'social_users';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
}
