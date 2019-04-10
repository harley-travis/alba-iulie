<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeInfo extends Model {

    protected $fillable = [
        'birthday',
        'married',
        'spouse_name',
        'email',
        'phone',
        'emergency_contact',
        'emergency_contact_phone',
        'address_1',
        'address_2',
        'address_3',
        'state',
        'city',
        'zip',
        'country',
        'employee_id'
    ];

    public function employee() {
        return $this->belongsTo('App\Employee');
    }

}
