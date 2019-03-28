<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Carbon\Carbon;
use App\Employee;
use App\EmployeeInfo;
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

    public function getEmployeeById($id) {

        $employee = DB::table('employees')
            ->leftJoin('employee_infos', 'employees.id', '=', 'employee_infos.employee_id')
            ->where('employee_infos.employee_id', '=', $id)
            ->first();

        return view('employees.edit', ['employee' => $employee, 'employeeId' => $employee]);

    }

    public function update(Store $session, Request $request) {
        
        // $this->validate($request, [
        //     'title' => 'required|min:5',
        //     'compensationAmount' => 'required|min:1'
        // ]);
    
        // update the employee table
        $employee = Employee::find($request->input('id'));
        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->email = $request->input('email');
        $employee->work_email = $request->input('work_email');
        $employee->phone = $request->input('phone');
        $employee->work_phone = $request->input('work_phone');
        $employee->ext = $request->input('ext');
        $employee->position = $request->input('position');
        $employee->department = $request->input('department');
        $employee->location = $request->input('location');
        $employee->duration = $request->input('duration');
        $employee->gender = $request->input('gender');
        $employee->disability = $request->input('disability');
        $employee->compensationType = $request->input('compensationType');
        $employee->compensationAmount = $request->input('compensationAmount');
        $employee->date_hired = $request->input('date_hired');
        $employee->date_left = $request->input('date_left');
        $employee->active = $request->input('active');

        $employee->save();

        // update the employee info table
        $employeeInfo = EmployeeInfo::find($request->input('id'));
        $employeeInfo->birthday = $request->input('birthday');
        $employeeInfo->married = $request->input('married');
        $employeeInfo->spouse_name = $request->input('spouse_name');
        $employeeInfo->emergency_contact = $request->input('emergency_contact');
        $employeeInfo->emergency_contact_phone = $request->input('emergency_contact_phone');
        $employeeInfo->address_1 = $request->input('address_1');
        $employeeInfo->address_2 = $request->input('address_2');
        $employeeInfo->address_3 = $request->input('address_3');
        $employeeInfo->state = $request->input('state');
        $employeeInfo->city = $request->input('city');
        $employeeInfo->zip = $request->input('zip');
        $employeeInfo->country = $request->input('country');

        $employeeInfo->save();

        return redirect()->route('employees.overview')->with('info', 'The employee was successfully updated');

    }
    
}
