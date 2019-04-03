<?php

namespace App;

use Laravelista\Comments\Commentable;
use Illuminate\Database\Eloquent\Model;

class ApplicantProfile extends Model {

    use Commentable;

    /**
     * STAGE
     * ------------------------
     * 0) PENDING
     * 1) SCHEDULED FIRST INTERVIEW
     * 2) COMPLETED FIRST INTERVIEW
     * 3) SCHEDULED SECOND INTERVIEW
     * 4) COMPLETED SECOND INTERVIEW
     * 5) SCHEDULED THIRD INTERVIEW
     * 6) COMPLETED THIRD INTERVIEW
     * 7) HIRED
     */
    
    protected $fillable = [
        'stage', 
        'interview_one', 
        'interview_two', 
        'interview_three', 
    ];

    public function applicant() {
        return $this->belongsTo('App\Applicant');
    }

}
