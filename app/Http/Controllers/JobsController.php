<?php

namespace App\Http\Controllers;

use App\Job;
use App\Company;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Session\Store;

class JobsController extends Controller {
    
    public function getJobs(Company $company) {

        if(Auth::check()) {

            /**
             * For the hasManyThrough() you just need to find the assc to 
             * user and then boom!
             */

            $company_id = Auth::user()->company_id;
            $jobs = Company::find($company_id)
                ->jobs()
                ->orderBy('created_at', 'ASC')
                ->paginate(15);

            return view('jobs.overview', ['jobs' => $jobs]);
        } 

    }

    // get all jobs and return json to test CORS
    public function getAllJobs() {

        $jobs = Job::all();
        $jobs->toJson(JSON_PRETTY_PRINT);
        return response()->json($jobs);

    }
    
    public function createJob() {
        return view('jobs.create');
    }
    
    public function addJob(Request $request){

        // validate 
        $this->validate($request, [
			'title'                 => 'required|min:5',
			'compensationAmount'    => 'required|min:1'
        ]);
        
        $user = Auth::user(); 
        if(!$user) {
            return redirect()->back();
        }

        $user_id = Auth::user()->id;
        
        // grab the company assc to user
       // $company_id = Company::where('user_id', '=', $user->id)->value('id');
        
	    $job = new Job([
            'title'                 => $request->input('title'), 
            'location'              => $request->input('location'),
            'department'            => $request->input('department'),
            'duration'              => $request->input('duration'),
            'compensationType'      => $request->input('compensationType'),
            'compensationAmount'    => $request->input('compensationAmount'),
            'closeDate'             => $request->input('closeDate'),
            'description'           => $request->input('description'),
            'work'                  => $request->input('work'),
            'qualifications'        => $request->input('qualifications'),
            'skills'                => $request->input('skills'),
            'filled'                => $request->input('closeDate'),
            'isActive'              => $request->input('isActive'),
            'user_id'               => $user_id,
        ]);

        $job->save();            
        
		return redirect()
			->route('jobs.overview')
			->with('info', 'Good news, your job was added!');

    }

    
    // this function is triggered when the click the button. grabs the id and returns the EDIT view with the id in place.
    // teh updateJob() actually updates the info
    public function getJobId($id) {

        $job = Job::find($id);
        return view('jobs.edit', ['job' => $job, 'jobId' => $id]);
    }


    // this updates the info in edit page
    public function updateJob(Store $session, Request $request) {
        
        $this->validate($request, [
			'title' => 'required|min:5',
			'compensationAmount' => 'required|min:1'
		]);
      
        $job = Job::find($request->input('id'));
        $job->title =  $request->input('title');
        $job->location =  $request->input('location');
        $job->department =  $request->input('department');
        $job->duration =  $request->input('duration');
        $job->compensationType =  $request->input('compensationType');
        $job->compensationAmount =  $request->input('compensationAmount');
        $job->closeDate =  $request->input('closeDate');
        $job->description =  $request->input('description');
        $job->work =  $request->input('work');
        $job->qualifications =  $request->input('qualifications');
        $job->skills =  $request->input('skills');
        $job->isActive =  $request->input('isActive');
        $job->save();

        return redirect()->route('jobs.overview')->with('info', 'The job was updated');
    }
    
    public function archiveJob($id) {

        $job = Job::find($request->input('id'));

        if($job->isActive === 1) {
            $job->isActive = 0;
            $job->save();
        }

    }

    public function viewJob() {
        return view('jobs.view');
    }

}