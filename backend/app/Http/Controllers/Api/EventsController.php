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
        $events = Events::all();

        return $events->toJson();

    }

}