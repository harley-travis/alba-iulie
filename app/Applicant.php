<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model {

    protected $fillable = [
        'first-name', 
        'last-name', 
        'email', 
        'phone', 
        'is-active', 
        'date-applied', 
        'stage', 
        'companies_id',
        'job_id'
    ];
    
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function job() {
        return $this->belongsTo('App\Job');
    }

    public function company() {
        return $this->hasMany('App\Company');
    }
    
}
