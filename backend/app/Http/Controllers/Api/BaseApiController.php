<?php
namespace quizzes\Http\Controllers\Api;

use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;
use App;
use Config;
use Input;
use Log;
use Route;
use quizzes\API\APIResponse;

class BaseApiController extends ApiGuardController {

    public function __construct()
    {
        $serializedApiMethods = serialize($this->apiMethods);

        // Launch middleware
        $this->middleware('apiguard:' . $serializedApiMethods);

        // Attempt to get an authenticated user.
        $this->user = \ApiGuardAuth::getUser();

        $this->response = new APIResponse();
    }

} 