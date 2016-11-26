<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => quizzes\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '1106843559433135',
        'client_secret' => '23cb64cf489d64a9b7db8db8e18c2b3a',
        'redirect' => 'http://rsc.app/callbackFacebook',
    ],
    'google' => [
        'client_id' => '1029954208315-vkhucpt5tsel2v8epf7bus409c3h0gg2.apps.googleusercontent.com',
        'client_secret' => '4OSo0Oj47fibfXVYm5DkSu3h',
        'redirect' => 'http://rsc.app/callbackGoogle',
    ],

];
