<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use Illuminate\Session\Store;

class JobsController extends Controller {
    
    public function getJobs() {

        // add your code then return the view 
        // return view('jobs.overview', ['jobs' => jobs]);
        
		return view('jobs.overview');
	}
    
}
