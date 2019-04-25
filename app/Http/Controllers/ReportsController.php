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

    // add your code then return the view 
        
    return view('reports.overview');
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


  }

  public function getPageVisits() {

    /**
     * get all jobs where the company id = id and where column.
     * return the view
     */

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
