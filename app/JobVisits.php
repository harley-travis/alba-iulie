<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobVisits extends Model {
    
    protected $fillable = [
        'visits',
        'date_filled',
        'job_id',
    ];
}
