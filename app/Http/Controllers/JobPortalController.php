<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use App\Job;
use App\Company;

use Carbon\Carbon;

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
                        
            $applicant = new Applicant([
                'first-name'            => $request->input('first-name'), 
                'last-name'             => $request->input('last-name'), 
                'email'                 => $request->input('email'), 
                'phone'                 => $request->input('phone'), 
                'is-active'             => 0, 
                'date-applied'          => Carbon::now(), 
                'stage'                 => 0, 
                'companies_id'          => $request->input('companies_id'),
                'job_id'                => $request->input('job_id')

            ]);
    
            $applicant->save();
         
            return redirect()
                ->route('job_portal.job', ['company_id' => $request->input('companies_id'), 'job_id' => $request->input('job_id')])
                ->with('info', 'Good news, you applied!');

    }

}
