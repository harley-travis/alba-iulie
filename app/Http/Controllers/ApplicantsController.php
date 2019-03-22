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

        if(Auth::check()) {
            
            $applicants = Applicant::where('company_id', '=', Auth::user()->company_id)->orderBy('created_at', 'ASC')->paginate(15);
            return view('applicants.overview', ['applicants' => $applicants]);
        } 
        
    }

    public function getApplicantById($id) {
        $applicant = Applicant::find($id);
        return view('applicants.profile', ['applicant' => $applicant, 'applicantId' => $id]);
    }
    
}
