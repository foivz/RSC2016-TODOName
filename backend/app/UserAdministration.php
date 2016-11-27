<?php

namespace quizzes;

use Illuminate\Database\Eloquent\Model;

class UserAdministration extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_administrations';

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
    protected $fillable = ['nickname', 'email'];

    
}
