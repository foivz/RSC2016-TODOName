<?php

namespace quizzes;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    protected $fillable = ['user_id', 'provider_user_id', 'provider'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function quizQuestion() {
        return $this->belongsTo('quizzes\Teams');
    }
}
