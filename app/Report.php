<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model {
    
    protected $fillable = [
        'visits',
        'date_filled',
        'job_id',
    ];


    /**
     * NOT SURE IF I NEED A RELATIONSHIP FOR THE REPORTS. 
     */

}
