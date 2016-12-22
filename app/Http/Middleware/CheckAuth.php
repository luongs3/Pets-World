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
        $data = $request->all();
        $accessToken = OAuthTestController::getAccessToken($data['resource_id']);

        return $next($request);
    }
}
