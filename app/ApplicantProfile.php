<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicantProfile extends Model {
    
    protected $fillable = [
        'stage', 
        'interview_one', 
        'interview_two', 
        'interview_three', 
    ];


    public function applicant() {
        return $this->belongsTo('App\Applicant')->withTimeStamps();
    }
}
