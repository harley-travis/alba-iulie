<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use Illuminate\Session\Store;

class ReportsController extends Controller
{
      public function getReports() {

        // add your code then return the view 
        
		return view('reports.overview');
	}
}
