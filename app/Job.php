<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {

    protected $casts = [
        'id' => 'integer',
        'closeDate' => 'date:Y-m-d', 
        'filled' => 'date:Y-m-d', 
    ];

    // make these variables mass assignable
    protected $fillable = [
        'title', 
        'location', 
        'department', 
        'duration', 
        'compensationType', 
        'compensationAmount', 
        'description', 
        'work', 
        'qualifications',
        'skills', 
        'isActive',
        'user_id',

    ];

    //protected $primaryKey = 'id';

    public function applicant() {
        return $this->belongsToMany('App\Applicant')->withTimeStamps();
    }

    public function company() {
        return $this->belongsTo('App\Company');
    }

}
