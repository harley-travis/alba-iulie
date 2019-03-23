<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

    protected $fillable = [

        'company_id', 
        'first_name',
        'last_name',  
        'email', 
        'work_email', 
        'phone', 
        'work_phone', 
        'ext', 
        'position', 
        'department',
        'location', 
        'duration',
        'gender',
        'ethnicity',
        'veteran',
        'disability',
        'compensationType',
        'compensationAmount',
        'date_hired',
        'date_left',
        'active',

    ];

    public function company() {
        return $this->belongsTo('App\Company');
    }

    public function EmployeeInfo() {
        return $this->hasOne('App\EmployeeInfo');
    }

}
