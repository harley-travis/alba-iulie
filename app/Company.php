<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

     protected $fillable = [
        'name', 
        'bio',
        'logo',
    ];

    //protected $primaryKey = 'id';

    public function jobs() {
        return $this->hasManyThrough('App\Job', 'App\User');
    }

    public function employees() {
        return $this->hasMany('App\Employee');
    }
    
}
