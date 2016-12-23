<?php

namespace App\Http\Controllers;

use App\Models\AccessToken;
use App\Models\OauthAccessToken;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;

class OAuthTestController extends Controller
{
    public function generateAccessToken($resourceId)
    {
        setcookie($resourceId);
        $accessToken = $this->getAccessToken($resourceId);

        if (is_null($accessToken)) {
            //gen
            $key = config('common.encrypter_token_string');
            $data = request()->all();
            $data['resource_id'] = $resourceId;
            $jwt = JWT::encode($data, $key);

            //save this access token to database if not exist
            AccessToken::firstOrCreate([
                'access_token' => $jwt,
                'client_id' => $data['client_id'],
                'scopes' => $data['scopes'],
                'resource_id' => $data['resource_id'],
                'name' => 'test',
            ]);

            //make a cookie at client
//            \Cookie::make($data['resource_id'], $jwt, time()+360000, '/');
            setcookie($data['resource_id'], $jwt, time()+360000, '/');
            $accessToken = $this->getAccessToken($resourceId);
        }

        return $accessToken;
    }

    public static function getAccessToken($resourceId)
    {
        if (isset($resourceId) && isset($_COOKIE[$resourceId])) {
            return $_COOKIE[$resourceId];
        }
    }
}
