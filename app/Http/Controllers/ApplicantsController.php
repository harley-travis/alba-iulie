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
