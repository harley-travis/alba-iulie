<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use Illuminate\Session\Store;


class EmployeesController extends Controller {
    
    public function getEmployees() {

        // add your code then return the view 
        
		return view('employees.overview');
	}
    
}
