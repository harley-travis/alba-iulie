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
    
    public function viewEmployee($id) {
        //$employee = Employee::find($id);

        $employee = DB::table('employees')
            ->leftJoin('employee_infos', 'employees.id', '=', 'employee_infos.employee_id')
            ->where('employee_infos.employee_id', '=', $id)
            ->first();

                        

        return view('employees.view', ['employee' => $employee, 'employeeId' => $id]);
    }
    
}
