<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model {
    
    protected $fillable = [
        'subject', 
        'issue', 
        'status',
        'user_id', 
    ];

    protected $dates = ['created_at'];

    protected $casts = [
        'created_at' => 'date:Y-m-d', 
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

}
