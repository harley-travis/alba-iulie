<?php

namespace App;

use Laravelista\Comments\Commentable;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model {

    use Commentable;
    
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
