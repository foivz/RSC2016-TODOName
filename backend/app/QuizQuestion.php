<?php

namespace quizzes;

use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'quiz_questions';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['question','category'];

    
}
