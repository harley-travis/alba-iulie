<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Job;
use App\Company;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use Illuminate\Session\Store;


class ApplicantsController extends Controller {

    public function getApplicants() {
        
        // need to pass in the job id

       // LOOK AT MANY TO MANY RELATIONSHIPS
       // ONE APPLICANT CAN APPLY TO MANY JOBS TO MANY COMPANIES

        // TRYING TO PULL THE DATA FROM TEH APPLCIATNS AND JOB

        // get all applicants
        //$applicants = Applicant::orderby('date-applied')->get();

        $user = Auth::user(); 
        if(!$user) {
            return redirect()->back();
        }
        
        // grab the company assc to user
        $company_id = Company::where('user_id', '=', $user->id)->value('id');

        $applicants = Applicant::where('companies_id', '=', $company_id)->get();
    
        
        return view('applicants.overview', ['applicants' => $applicants]);
    }
    
}
