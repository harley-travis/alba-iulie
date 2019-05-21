<?php

namespace App\Http\Controllers;

use DB;
use App\Applicant;
use App\ApplicantProfile;
use App\Report;
use App\Job;
use App\Company;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class JobPortalController extends Controller {

    public function show($company_id, $job_id) {

        // to-do IF THAT JOB/PAGE DOES NOT EXIST THROUGH 404

        $job = Company::find($company_id)->jobs->where('id', '=', $job_id);
        $company = DB::table('companies')->where('id', '=', $company_id)->get();

        // add a view to the job
        /**
         * TODO : only mark the IP address once in a session. PHASE 2
         */
        $report = Report::find($job_id);
        $report->visits = $report->visits + 1;
        $report->save();
        
        return view('job_portal.job', ['company' => $company, 'job' => $job]);
    }
                                                                                                                                                                                                                                                                                      
    public function applyToJob(Request $request) {

            // validate 
            //$this->validate($request, [
            //    'title'                 => 'required|min:5',
            //   'compensationAmount'    => 'required|min:1'
            //]);

            // validate file contents
            // https://www.5balloons.info/upload-profile-picture-avatar-laravel-5-authentication/ 

            // upload resume
            $file = $request->resume->storeAs('companies/'.$request->input('company_id').'/resumes', $request->input('last_name').'_'.$request->input('first_name').'_'.time().'_resume.pdf', 'public');

            $applicant = new Applicant([
                'first_name'            => $request->input('first_name'), 
                'last_name'             => $request->input('last_name'), 
                'email'                 => $request->input('email'), 
                'phone'                 => $request->input('phone'),
                'gender'                => $request->input('gender'),
                'ethnicity'             => $request->input('ethnicity'),
                'veteran'               => $request->input('veteran'),
                'disability'            => $request->input('disability'), 
                'is_active'             => 1, 
                'date_applied'          => Carbon::now(), 
                'resume'                => $file,
                'job_id'                => $request->input('job_id'),
                'company_id'            => $request->input('company_id'),
            ]);
    
            $applicant->save();
            $applicant->jobs()->attach($request->input('job_id'));

            $applicant_profile = new ApplicantProfile ([
                'applicant_id'          => $applicant->id,
                'stage'                 => 0, 
                'interview_one'         => null,
                'interview_two'         => null,
                'interview_three'       => null,
            ]);
            $applicant_profile->save();
         
            return redirect()
                ->back()
                ->with('info', 'Good news, you applied!');

    }

}
