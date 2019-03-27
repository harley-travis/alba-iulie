<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Carbon\Carbon;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use Illuminate\Session\Store;


class EmployeesController extends Controller {
    
    public function getEmployees() {

        $employees = DB::table('employees')->where('company_id', '=', Auth::user()->company_id)->where('active', '=', '1')->orderBy('created_at', 'ASC')->paginate(15);
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

    public function getArchivedEmployees() {

        $employees = DB::table('employees')->where('company_id', '=', Auth::user()->company_id)->where('active', '=', '0')->orderBy('date_left', 'DSC')->paginate(15);
        return view('employees.archived', ['employees' => $employees]);
        
    }

    public function archiveEmployee($id) {

        $employee = Employee::find($id);

        if($employee->active === 1) {
            $employee->active = 0;
            $employee->date_left = Carbon::now();
            $employee->save();
        }

        return redirect()
                ->route('employees.overview')
                ->with('info', $employee->first_name.' '.$employee->last_name.' has been archived');
    }
    
}
