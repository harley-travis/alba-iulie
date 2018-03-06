<?php

namespace App\Http\Controllers;

use App\Applicant;
use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use Illuminate\Session\Store;


class ApplicantsController extends Controller {

    public function getApplicants() {
        
        // get all applicants
        $applicants = Applicant::orderby('dateApplied')->get();
        
        return view('applicants.overview', ['applicants' => $applicants]);
    }
    
}
