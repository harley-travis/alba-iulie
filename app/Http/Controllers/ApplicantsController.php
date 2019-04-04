<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Job;
use App\Company;
use App\Applicant;
use App\ApplicantProfile;
use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use Illuminate\Session\Store;
use Laravelista\Comments\Commentable;


class ApplicantsController extends Controller {

    use Commentable;

    public function getApplicants() {

        $user = Auth::user(); 
        if(!$user) {
            return redirect()->back();
        }

        if(Auth::check()) {
            
            $applicants = Applicant::where('company_id', '=', Auth::user()->company_id)
                ->where('is_active', '=', '1')
                ->orderBy('created_at', 'ASC')
                ->paginate(15);
            return view('applicants.overview', ['applicants' => $applicants]);
        } 
        
    }

    public function getApplicantById($id) {

        $applicant = Applicant::leftJoin('applicant_profiles', 'applicants.id', '=', 'applicant_profiles.applicant_id')
            ->where('applicant_profiles.applicant_id', '=', $id)
            ->firstOrFail();

        return view('applicants.profile', ['applicant' => $applicant, 'applicantId' => $id]);

    }

    public function getArchivedApplicants() {

        $applicants = DB::table('applicants')
            ->where('company_id', '=', Auth::user()->company_id)
            ->where('is_active', '=', '0')
            ->orderBy('date_applied', 'DSC')
            ->paginate(15);

        return view('applicants.archived', ['applicants' => $applicants]);
        
    }
    
    public function archiveApplicant($id) {

        $applicant = Applicant::find($id);

        if($applicant->active === 1) {
            $applicant->active = 0;
            $applicant->date_left = Carbon::now();
            $applicant->save();
        }

        return redirect()
                ->route('applicants.overview')
                ->with('info', $applicant->first_name.' '.$applicant->last_name.' has been archived');
    }

    public function updateStage(Request $request) {

        $applicant = ApplicantProfile::where('applicant_id', '=', $request->input('id'))->firstOrFail();
        $applicant->stage = $request->input('stage');
        $applicant->save();

        return redirect()->route('applicants.overview')->with('info', 'Applicant updated');

    }

}
