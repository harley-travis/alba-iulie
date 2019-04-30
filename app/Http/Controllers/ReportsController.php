<?php

namespace App\Http\Controllers;

use Auth;
use App\Company;
use App\Report;
use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use Illuminate\Session\Store;

class ReportsController extends Controller {

  public function getReports() {        
    return view('reports.overview');
  }

  public function filterReports(Request $request) {
    /**
     * This function acts as a filter to run the proper report based 
     * on the users selction 
     * 
     * LEGEND
     * ---------------------------
     * 0 = Time to fill jobs
     * 1 = Job page visits
     */

     if($request->input('0')) {

        return $this->getTimeToFillJobsReport();

     } elseif ($request->input('1')) {

        return $this->getPageVisits();

     } else {

       echo "There was an error gathering the data";

     }

  }

  public function updateTimeToFillJobsReport() {

    /**
     * 
     * 
     */

  }

  public function getTimeToFillJobsReport() {

    // get all jobs where the company id = company id and active == 1 AND FILLED

    // need to figure if i need a status indicator if hte position has been filled. or should a date just work?

    /**
     * | ID | POSITION | DATE CREATED | DATE FILLED | TIME IT TOOK TO FILL |
     * ---------------------------------------------------------------------------
     * 
     */


    return view('reports.report', ['title' => "Time to Fill Jobs"]);

  }

  public function getPageVisits() {

    /**
     * get all jobs where the company id = id and where column.
     * return the view
     */


    return view('reports.report', ['title' => "Page Visits"]);

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
