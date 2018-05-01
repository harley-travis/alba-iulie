<?php

namespace App\Http\Controllers;

use App\Job;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Session\Store;

class JobsController extends Controller {
    
    public function getJobs() {

        $jobs = Job::all();
        return view('jobs.overview', ['jobs' => $jobs]);

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


        // because we have our fillable variable set in our model, i can just call a var called $job and crate a new instance of the Job model to pass this data
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
            'isActive'              => $request->input('isActive')
        ]);

        $job->save(); // elqouent saves this to the db for us! 
                
		return redirect()
			->route('jobs.overview')
			->with('info', 'Good news, your job was added!');

    }

    
    // this function is triggered when the click teh button. grabs the id and returns the EDIT view with the id in place.
    // teh updateJob() actually updates the info
    public function getJobId($id) {

        $job = Job::find($id);
       
        // old wday
       // $job = new Job();
        //$job = $job->getJobs($session, $id);
        // the jobId here is what connects the edit job page!!!!
        return view('jobs.edit', ['job' => $job, 'jobId' => $id]);
    }


    // this updates the info in edit page
    public function updateJob(Store $session, Request $request) {
        
        $this->validate($request, [
			'title' => 'required|min:5',
			'compensationAmount' => 'required|min:5'
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

       //$job = new Job();

        // OLD METHOD
        // $job->editJob($session,
        //     $request->input('id'),
        //     $request->input('title'),
        //     $request->input('location'),
        //     $request->input('department'),
        //     $request->input('duration'),
        //     $request->input('compensationType'),
        //     $request->input('compensationAmount'),
        //     $request->input('closeDate'),
        //     $request->input('description'),
        //     $request->input('work'),
        //     $request->input('qualifications'),
        //     $request->input('skills'),
        //     $request->input('filled'),
        //     $request->input('isActive')
        // );

        return redirect()->route('jobs.overview')->with('info', 'The job was updated');
    }
    
}
