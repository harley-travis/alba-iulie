<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

     protected $fillable = [
        'name', 
        'bio'
    ];

    //protected $primaryKey = 'id';

    public function jobs() {
        return $this->hasManyThrough('App\Job', 'App\User');
    }
    
}
