<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profile extends Controller {
    
    public function getProfile() {
        return view('profile.overview');
    }

}
