<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model {

    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'phone', 
        'is_active', 
        'date_applied', 
        'stage', 
        'companies_id',
        'job_id'
    ];
    
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function jobs() {
        return $this->belongsToMany('App\Job')->withTimeStamps();
    }

    public function company() {
        return $this->hasMany('App\Company');
    }
        
}
