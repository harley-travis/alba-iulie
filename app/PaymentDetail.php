<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model {
    
    protected $fillable = [
        'name', 
        'consent', 
        'ip', 
        'country', 
        'frequency', 
        'user_id', 
    ];

}
