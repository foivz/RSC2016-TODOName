<?php

namespace quizzes\Http\Controllers\Api;

use quizzes\Events;
use quizzes\API;
use EllipseSynergie\ApiResponse\Contracts\Response;

class EventsController extends BaseApiController {



    protected $apiMethods = [
        'listAll' => ['keyAuthentication' => false],
    ];

    public function listAll() {
        $teams = Events::all();
        $result = $teams->toJson();
        return json_decode($result);
    }

}