<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quizz extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'image', 'active', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function questions() {
        return $this->hasMany('App\Question');
    }

    public function imageQuizzs() {
        return $this->hasMany('App\ImageQuizz');
    }
}
