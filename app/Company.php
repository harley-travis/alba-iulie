<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

     protected $fillable = [
        'company_name', 
        'bio'
    ];

    public function users() {
        return $this->hasMany('App\User');
    }
    
    public function applicant() {
        return $this->belongsTo('App\Applicant');
    }
}
