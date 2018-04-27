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

    public function editJob(Store $session, Request $request) {
        
        $this->validate($request, [
			'title' => 'required|min:5',
			'compensationAmount' => 'required|min:5'
		]);
        
        // find the id of the job
        $job = Job::find($request->input('id'));

        // update the data then save 
        $job->title = $request->input('title');
        $job->compensationAmount = $request->input('compensationAmount');
        $job->save();

        return redirect()->route('jobs.overview')->with('info', 'The job was updated');
    }

    public function editJobByID(Store $session, Request $request) {
        
        $job = new Job();
        $job = $job->get($session, $id);
        return view('jobs.edit', ['job' => $job, 'jobId' => $id]);
    }
    

    
}
