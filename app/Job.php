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
        'companies_id'

        // might need to create a col to indicate wither the job has been filled or not. 0 or 1 
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function company() {
        return $this->belongsTo('App\Company');
    }

    public function questions() {
        return $this->hasMany('App\Question');
    }
    
}
