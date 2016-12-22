<?php

namespace App\Http\Controllers\Auth;

use App\Models\SocialUser;
use App\Http\Controllers\Controller;
use Socialite;
use App\Models\User;
use Auth;

class SocialiteController extends Controller
{
    protected $userRepository;

    public function __construct()
    {
    }

    public function redirect($social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function callback($social)
    {

        $user = Socialite::driver($social)->user();

        $data = [
            'name' => $user->getName(),
            'email' => $user->getEmail(),
        ];

        $user = User::firstOrCreate($data);

        $socialData = [
            'user_id' => $user->id,
            'provider' => $social,
            'provider_id' => config('common.user.provider.' . $social),
        ];
        SocialUser::firstOrCreate($socialData);
        Auth::login($user);

        return redirect('/home');
    }
}
