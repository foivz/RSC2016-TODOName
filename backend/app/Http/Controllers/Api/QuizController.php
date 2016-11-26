<?php

namespace quizzes\Http\Controllers\Api;


use quizzes\Quiz;
use quizzes\QuizAnswer;
use quizzes\QuizQuestion;
use quizzes\QuizQuestionChoice;
use quizzes\User;
use Illuminate\Support\Facades\Request;

class QuizController extends BaseApiController {

	/**
	 * @SWG\Resource(
	 *     apiVersion="0.1",
	 *     swaggerVersion="1.2",
	 *     resourcePath="/quiz",
	 * )
	 */
    protected $apiMethods = [
        'listAll' => ['keyAuthentication' => false],
    ];
	/**
	 *
	 * @SWG\Api(
	 *   path="/quizes",
	 *   description="Manipulates the quiz object.",
	 *   @SWG\Operation(
	 * 		method="GET",
	 * 		summary="Returns a list of all quizes | PUBLIC",
	 * 		notes="Returns basic info on all quizes.",
	 * 		nickname="listQuizes",
	 * 		authorizations={},
	 * 		@SWG\ResponseMessage(code=200, message="All quizes sucessfully listed."),
	 *   )
	 * )
	 */
	public function listAll() {
		$quizes = QuizQuestion::all();
		/*$result = [];
		foreach($quizes as $quiz) {
			//$status = $quiz->getQuizStatus();
			array_push($result,[
				'id' => $quiz->id,
				'name' => $quiz->name,
				'description' => $quiz->description,
				'thumbnail' => $quiz->thumbnail,
				//'finished' => $status['finished'],
				//'passed' => $status['passed'],
			]);
		}*/
		return $quizes->toJson();
	}

} 