<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

    protected $fillable = [
        'ip',
        'user_id',
        'company_id',
    ];
    
}
