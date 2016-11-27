<?php
namespace quizzes;

use Illuminate\Database\Eloquent\Model;
use quizzes\Http\Controllers\Api\SocialAccountController;

class Teams extends Model{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'teams';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'p1', 'p2', 'p3', 'p4'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function choices() {
        return $this->hasMany('quizzes\SocialAccount');
    }
}