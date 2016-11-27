<?php namespace quizzes;

use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'quiz_questions';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['question','category', 'thumbnail'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	/*  RELATIONSHIPS */

	public function choices() {
		return $this->hasMany('quizzes\QuizQuestionChoice');
	}


}
