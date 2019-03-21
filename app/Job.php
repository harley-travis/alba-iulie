<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {

    protected $casts = [
        'id' => 'integer'
    ];

    // make these variables mass assignable
    protected $fillable = [
        'title', 
        'location', 
        'department', 
        'duration', 
        'compensationType', 
        'compensationAmount', 
        'closeDate', 
        'description', 
        'work', 
        'qualifications',
        'skills', 
        'filled', // is a date
        'isActive',
        'user_id',
        // might need to create a col to indicate wither the job has been filled or not. 0 or 1 
    ];

    //protected $primaryKey = 'id';

    public function applicant() {
        return $this->belongsToMany('App\Applicant')->withTimeStamps();
    }

    public function company() {
        return $this->belongsTo('App\Company');
    }

}
