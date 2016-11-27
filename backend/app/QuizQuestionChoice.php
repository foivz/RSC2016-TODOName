<?php namespace quizzes;

use Illuminate\Database\Eloquent\Model;

class QuizQuestionChoice extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'quiz_question_choices';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['quiz_question_id', 'choice', 'points'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	/**
	 * Custom generated attributes
	 *
	 * @var array
	 */
	protected $appends = ['isRight'];

	public function getIsRightAttribute() {
		return $this->points >= 0;
	}

	/*  RELATIONSHIPS */
	public function quizQuestion() {
		return $this->belongsTo('quizzes\QuizQuestion');
	}


}
