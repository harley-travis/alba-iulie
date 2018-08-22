<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use App\Job;
use App\Company;

use Carbon\Carbon;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class JobPortalController extends Controller {
    
    public function getJob($company_id, $job_id) {

        // to-do IF THAT JOB/PAGE DOES NOT EXIST THROUGH 404
        $job = Company::join('jobs', 'companies.id', '=', 'jobs.companies_id' )
                    ->where('jobs.companies_id', '=', $company_id)
                    ->where('jobs.id', '=', $job_id)
                    ->get();

        return view('job_portal.job', ['job' => $job]);

    }
                                                                                                                                                                                                                                                                                  
    public function applyToJob(Request $request) {

            // validate 
            //$this->validate($request, [
            //    'title'                 => 'required|min:5',
            //   'compensationAmount'    => 'required|min:1'
            //]);

            // upload resume
            $file = $request->resume->storeAs('companies/'.$request->input('companies_id').'/resumes', $request->input('last_name').'_'.$request->input('first_name').'_'.time().'_resume.pdf', 'public');

            $applicant = new Applicant([
                'first_name'            => $request->input('first_name'), 
                'last_name'             => $request->input('last_name'), 
                'email'                 => $request->input('email'), 
                'phone'                 => $request->input('phone'), 
                'is_active'             => 0, 
                'date_applied'          => Carbon::now(), 
                'stage'                 => 0, 
                'resume'                => $file,
                'companies_id'          => $request->input('companies_id')
            ]);
    
            $applicant->save();
            $applicant->jobs()->attach($request->input('job_id'));
         
            return redirect()
                ->route('job_portal.job', ['company_id' => $request->input('companies_id'), 'job_id' => $request->input('job_id')])
                ->with('info', 'Good news, you applied!');

    }

}
