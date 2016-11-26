<?php

namespace quizzes\Http\Controllers;

use Illuminate\Http\Request;

use quizzes\Http\Requests;
use quizzes\Http\Controllers\Controller;
use quizzes\SocialAccountServiceFacebook;
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

        return redirect()->to('/register');
    }
}
