<?php

namespace App;

use Laravelista\Comments\Commentable;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model {

    use Commentable;

    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'phone', 
        'gender',
        'ethnicity' ,
        'veteran',
        'disability', 
        'is_active', 
        'stage', 
        'resume',
        'date_applied',
        'company_id',
        'job_id'
    ];
    
    public function jobs() {
        return $this->belongsToMany('App\Job')->withTimeStamps();
    }

    public function applicantProfile() {
        return $this->hasOne('App\ApplicantProfile');
    }
        
}
