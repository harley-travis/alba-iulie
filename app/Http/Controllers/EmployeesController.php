<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use Illuminate\Session\Store;


class EmployeesController extends Controller {
    
    public function getEmployees() {

        // add your code then return the view 
        $employees = DB::table('employees')->where('company_id', '=', Auth::user()->company_id)->orderBy('created_at', 'ASC')->paginate(15);

		return view('employees.overview', ['employees' => $employees]);
    }
    
    public function viewEmployee() {
        return view('employees.view');
    }
    
}
