<?php

namespace quizzes\Http\Controllers\Api;

use quizzes\Teams;
use quizzes\API;


class TeamsController extends BaseApiController {



    protected $apiMethods = [
        'listAll' => ['keyAuthentication' => false],
    ];

    public function listAll() {
        $teams = Teams::all();
        $result = $teams->toJson();
        return json_decode($result);
    }

}