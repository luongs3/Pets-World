<?php

namespace App\Http\Middleware;

use App\Http\Controllers\OAuthTestController;
use Closure;

class CheckAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $resourceId = $request->get('resource_id');

        if (is_null($resourceId)) {
            abort(404);
        }

        $accessToken = OAuthTestController::getAccessToken($resourceId);

        if (is_null($accessToken)) {
            abort(401, "access invalid");
        }

        $key = config('common.encrypter_token_string');
        try {
            $jwtData = JWT::decode($accessToken, $key, ['HS256']);
        } catch (Exception $ex) {
            abort(401, $ex->getMessage());
        }

        return $next($request);
    }
}
