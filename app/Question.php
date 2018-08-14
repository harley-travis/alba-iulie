<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {
    protected $fillable = [
        'title', 
        'question', 
        'job', 
        'interview_stage'
    ];

    public function job() {
        return $this->belongsTo('App\Job');
    }
}
