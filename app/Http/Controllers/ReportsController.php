<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Company;
use App\JobVisits;
use App\Job;
use Illuminate\Http\Response;

class ReportsController extends Controller {

  public function getReports() {      
    $company_id = Auth::user()->company_id;  
    return view('reports.overview', ['company_id' => $company_id]);
  }

  public function getTimeToFillJobsReport($id) {

    // get all jobs where the company id = company id and active == 1 AND FILLED

    // need to figure if i need a status indicator if hte position has been filled. or should a date just work?

    /**
     * | ID | POSITION | DATE CREATED | DATE FILLED | TIME IT TOOK TO FILL |
     * ---------------------------------------------------------------------------
     * 
     */

    $time = DB::table('jobs')
      ->leftJoin('job_visits', 'jobs.id', '=', 'job_visits.job_id')
      ->where('job_visits.company_id', '=', $id)
      ->where('job_visits.date_filled', '!=', null)
      ->get();

    return response($time->jsonSerialize(), Response::HTTP_OK);

  }

  public function getPageVisits($id) {

    $visits = DB::table('jobs')
      ->leftJoin('job_visits', 'jobs.id', '=', 'job_visits.job_id')
      ->where('job_visits.company_id', '=', $id)
      ->where('jobs.isActive', '=', '1')
      ->where('job_visits.date_filled', '=', null)
      ->get();

    return response($visits->jsonSerialize(), Response::HTTP_OK);

  }

  public function updatePageVisits($id) {

    $ip = Request::ip();

    /**
     * find the job id
     * find the value of the COUNTER col
     * 
     * if the ip != $ip
     * 
     * add 1
     * save and return
     * 
     * need to create a function in the job_portal view to call this method and update it 
     * 
     * need to create a col for page visits and for ip address
     * 
     * 
     */

  }






}
