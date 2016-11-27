<?php

namespace quizzes\Http\Controllers\Api;

use quizzes\Events;
use quizzes\SocialAccount;
use quizzes\API;
use EllipseSynergie\ApiResponse\Contracts\Response;

class SocialAccountController extends BaseApiController {



    protected $apiMethods = [
        'listAll' => ['keyAuthentication' => false],
    ];

    public function listAll() {
        $eventts = SocialAccount::all();
        $events = json_decode($eventts);
        return $events->toJson();

    }

}