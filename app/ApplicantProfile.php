<?php

namespace App;

use Laravelista\Comments\Commentable;
use Illuminate\Database\Eloquent\Model;

class ApplicantProfile extends Model {

    use Commentable;
    
    protected $fillable = [
        'stage', 
        'interview_one', 
        'interview_two', 
        'interview_three', 
    ];

    // public function applicant() {
    //     return $this->belongsTo('App\Applicant')->withTimeStamps();
    // }

}
