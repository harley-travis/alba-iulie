<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Company;

class JobPortalController extends Controller {
    
    public function getJob($company_id, $job_id) {

        // to-do IF THAT JOB/PAGE DOES NOT EXIST THROUGH 404
        $job = Company::join('jobs', 'companies.id', '=', 'jobs.companies_id' )
                    ->where('jobs.companies_id', '=', $company_id)
                    ->where('jobs.id', '=', $job_id)
                    ->get();


        return view('job_portal.job', ['job' => $job]);


    }
                                                                                                                                                                                                                                                                                  
    public function applyToJob() {

    }

}
