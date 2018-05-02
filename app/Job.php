<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {

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
        'filled', 
        'isActive'
    ];
    
}
