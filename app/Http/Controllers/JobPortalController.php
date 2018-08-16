<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobPortalController extends Controller {
    
    public function getJob($company, $job) {

        $job = Job::find($id);
        return view('jobs.edit', ['job' => $job, 'jobId' => $id]);

    }
                                                                                                                                                                                                                                                                                            
    public function applyToJob() {

    }

}
