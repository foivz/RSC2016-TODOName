<?php

namespace quizzes\Http\Controllers;

use Illuminate\Http\Request;

use quizzes\Http\Requests;
use quizzes\Http\Controllers\Controller;
use quizzes\SocialAccountServiceGoogle;
use Socialite;

class SocialAuthControllerGoogle extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback(SocialAccountServiceGoogle $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('google')->user());

        auth()->login($user);

        return redirect()->to('/register');
    }
}
