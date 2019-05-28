<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

    protected $fillable = [

        'company_id', 
        'user_id',
        'first_name',
        'last_name',  
        'work_email', 
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
        'avatar',
    ];

    public function company() {
        return $this->belongsTo('App\Company');
    }

    public function EmployeeInfo() {
        return $this->hasOne('App\EmployeeInfo');
    }

    public function user() {
        return $this->belongsTo('App/User');
    }

}
