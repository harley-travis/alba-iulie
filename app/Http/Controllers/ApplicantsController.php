<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Job;
use App\Company;
use App\Employee;
use App\EmployeeInfo;
use App\Applicant;
use App\ApplicantProfile;
use Carbon\Carbon;
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
            
            $applicants = Applicant::leftJoin('applicant_profiles', 'applicants.id', '=', 'applicant_profiles.applicant_id')
                ->where('company_id', '=', Auth::user()->company_id)
                ->where('is_active', '=', '1')
                ->where('stage', '<', '7')
                ->orderBy('applicants.created_at', 'desc')
                ->paginate(15);

            $positions = Company::find(Auth::user()->company_id)
                ->jobs()
                ->get();

            return view('applicants.overview', ['applicants' => $applicants, 'positions' => $positions]);
        } 
        
    }

    public function filterStage(Request $request) {

        // 8 = search all applicants
        if($request->input('stage') == 8) {
            $applicants = Applicant::leftJoin('applicant_profiles', 'applicants.id', '=', 'applicant_profiles.applicant_id')
                ->where('company_id', '=', Auth::user()->company_id)
                ->where('is_active', '=', '1')
                ->where('stage', '<', '7')
                ->orderBy('applicants.created_at', 'dsc')
                ->paginate(15);
        } else {
            $applicants = Applicant::leftJoin('applicant_profiles', 'applicants.id', '=', 'applicant_profiles.applicant_id')
                ->where('company_id', '=', Auth::user()->company_id)
                ->where('stage', '=', $request->input('stage'))
                ->where('is_active', '=', '1')
                ->orderBy('applicants.created_at', 'ASC')
                ->paginate(15);
        }

        $positions = Company::find(Auth::user()->company_id)
            ->jobs()
            ->get();

        return view('applicants.overview', ['applicants' => $applicants, 'positions' => $positions]);

    }

    public function filterJob(Request $request) {

         // 000 = search all jobs
         if($request->input('job_id') == 000) {
            $applicants = Applicant::leftJoin('applicant_profiles', 'applicants.id', '=', 'applicant_profiles.applicant_id')
                ->where('company_id', '=', Auth::user()->company_id)
                ->where('is_active', '=', '1')
                ->where('stage', '<', '7')
                ->orderBy('applicants.created_at', 'dsc')
                ->paginate(15);
        } else {
            $applicants = Applicant::leftJoin('applicant_profiles', 'applicants.id', '=', 'applicant_profiles.applicant_id')
                ->where('company_id', '=', Auth::user()->company_id)
                ->where('job_id', '=', $request->input('job_id'))
                ->where('is_active', '=', '1')
                ->orderBy('applicants.created_at', 'ASC')
                ->paginate(15);
        }

        $positions = Company::find(Auth::user()->company_id)
            ->jobs()
            ->get();

        return view('applicants.overview', ['applicants' => $applicants, 'positions' => $positions]);
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

        $positions = Company::find(Auth::user()->company_id)
            ->jobs()
            ->get();

        return view('applicants.archived', ['applicants' => $applicants, 'positions' => $positions]);
        
    }

    public function activateApplicant($id) {

        $applicant = Applicant::find($id);

        if($applicant->is_active === 0) {
            $applicant->is_active = 1;
            $applicant->save();
        }

        return redirect()
                ->route('applicants.overview')
                ->with('info', $applicant->first_name.' '.$applicant->last_name.' has been activated');
    }
    
    public function archiveApplicant($id) {

        $applicant = Applicant::find($id);

        if($applicant->is_active === 1) {
            $applicant->is_active = 0;
            $applicant->save();
        }

        return redirect()
                ->route('applicants.overview')
                ->with('info', $applicant->first_name.' '.$applicant->last_name.' has been archived');
    }

    public function updateStage(Request $request) {

        // if the stage is 7, then move the data into the employees table 
        // else update the applicant stage

        if( $request->input('stage') == 7 ) {

            $company =  Company::find(Auth::user()->company_id)->firstOrFail();
            $applicant = Applicant::where('id', '=', $request->input('id'))->firstOrFail();
            $job = Job::where('id', '=', $applicant->job_id)->firstOrFail();

            $employee = new Employee([
                'company_id'            => $company->id, 
                'first_name'            => $applicant->first_name,
                'last_name'             => $applicant->last_name,  
                'work_email'            => null, 
                'work_phone'            => null, 
                'ext'                   => null, 
                'position'              => $job->title,
                'department'            => $job->department,
                'location'              => $job->location, 
                'duration'              => $job->duration,
                'gender'                => $applicant->gender,
                'ethnicity'             => $applicant->ethnicity,
                'veteran'               => $applicant->veteran,
                'disability'            => $applicant->disability,
                'compensationType'      => null,
                'compensationAmount'    => null,
                'date_hired'            => Carbon::now()->format('Y-m-d'),
                'date_left'             => null,
                'active'                => '1',
            ]);
            $employee->save();   

            $employeeInfo = new EmployeeInfo([
                'employee_id'               => $employee->id, 
                'married'                   => null,
                'spouse_name'               => null,
                'email'                     => $applicant->email,
                'phone'                     => $applicant->phone,
                'birthday'                  => null,
                'emergency_contact'         => null,
                'emergency_contact_phone'   => null,
                'address_1'                 => null,
                'address_2'                 => null,
                'address_3'                 => null,
                'state'                     => null,
                'city'                      => null,
                'zip'                       => null,
                'country'                   => null,
            ]);
            $employeeInfo->save();   
            
            // delete the applicant from the database
            Applicant::where('id', '=', $request->input('id'))->delete();
            ApplicantProfile::where('applicant_id', '=', $request->input('id'))->delete();
            
            return redirect()->route('employees.overview')->with('info', 'Congratulations! '.$applicant->first_name.' has joined the roster');
            
        } else {

            $applicant = ApplicantProfile::where('applicant_id', '=', $request->input('id'))->firstOrFail();
            $applicant->stage = $request->input('stage');
            $applicant->save();

            return redirect()->route('applicants.overview')->with('info', 'Applicant updated');

        }

    }

}
