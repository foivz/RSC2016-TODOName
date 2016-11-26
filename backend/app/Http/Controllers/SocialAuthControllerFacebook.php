<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SocialAccountServiceFacebook;
use Socialite;

class SocialAuthControllerFacebook extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback(SocialAccountServiceFacebook $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());

        auth()->login($user);

        return redirect()->route('home');
    }
}
