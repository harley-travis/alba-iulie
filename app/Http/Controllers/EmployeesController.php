<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\User;
use Carbon\Carbon;
use App\Employee;
use App\EmployeeInfo;
use App\Company;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use Illuminate\Session\Store;


class EmployeesController extends Controller {
    
    public function getEmployees() {

        $employees = DB::table('employees')
            ->where('company_id', '=', Auth::user()->company_id)
            ->where('active', '=', '1')
            ->orderBy('created_at', 'ASC')
            ->paginate(15);
            
		return view('employees.overview', ['employees' => $employees]);
    }
    
    public function viewEmployee($id) {

        $employee = DB::table('employees')
            ->leftJoin('employee_infos', 'employees.id', '=', 'employee_infos.employee_id')
            ->leftJoin('users', 'employees.user_id', '=', 'users.id')
            ->where('employee_infos.employee_id', '=', $id)
            ->first();

        return view('employees.view', ['employee' => $employee, 'employeeId' => $id]);
    }

    public function createEmployee() {
        return view('employees.create');
    }

    public function addEmployee(Request $request) {

        // validate 
        // $this->validate($request, [
		// 	'title'                 => 'required|min:5',
		// 	'compensationAmount'    => 'required|min:1'
        // ]);

        $company =  Company::find(Auth::user()->company_id)->firstOrFail();

        $user = new User([
            'name' => $request->input('first_name').' '.$request->input('last_name'),
            'email' => $request->input('work_email'),
            'company_id' => $company->id,
            'password' => Hash::make($request->input('last_name').'1234'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'permissions' => $request->input('permissions'),
        ]);
        $user->save();

        $employee = new Employee([
            'company_id'            => $company->id, 
            'user_id'               => $user->id,
            'first_name'            => $request->input('first_name'),
            'last_name'             => $request->input('last_name'),  
            'work_email'            => $request->input('work_email'), 
            'work_phone'            => $request->input('work_phone'), 
            'ext'                   => $request->input('ext'), 
            'position'              => $request->input('position'), 
            'department'            => $request->input('department'),
            'location'              => $request->input('location'), 
            'duration'              => $request->input('duration'),
            'gender'                => $request->input('gender'),
            'ethnicity'             => $request->input('ethnicity'),
            'veteran'               => $request->input('veteran'),
            'disability'            => $request->input('disability'),
            'compensationType'      => $request->input('compensationType'),
            'compensationAmount'    => $request->input('compensationAmount'),
            'date_hired'            => $request->input('date_hired'),
            'date_left'             => null,
            'active'                => $request->input('active'),
        ]);
        $employee->save();   

        $employeeInfo = new EmployeeInfo([
            'employee_id'               => $employee->id, 
            'married'                   => $request->input('married'),
            'spouse_name'               => $request->input('spouse_name'),
            'email'                     => $request->input('email'),
            'phone'                     => $request->input('phone'),
            'birthday'                  => $request->input('birthday'),
            'emergency_contact'         => $request->input('emergency_contact'),
            'emergency_contact_phone'   => $request->input('emergency_contact_phone'),
            'address_1'                 => $request->input('address_1'),
            'address_2'                 => $request->input('address_2'),
            'address_3'                 => $request->input('address_3'),
            'state'                     => $request->input('state'),
            'city'                      => $request->input('city'),
            'zip'                       => $request->input('zip'),
            'country'                   => $request->input('country'),
        ]);
        $employeeInfo->save();   

        return redirect()->route('employees.overview')->with('info', 'Congratulations! '.$employee->first_name.' has joined the roster');

    }

    public function getArchivedEmployees() {

        $employees = DB::table('employees')
            ->where('company_id', '=', Auth::user()->company_id)
            ->where('active', '=', '0')
            ->orderBy('date_left', 'DSC')
            ->paginate(15);
            
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
            ->leftJoin('users', 'employees.user_id', '=', 'users.id')
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
        $employee->work_email = $request->input('work_email');
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

        /**
         * LEFT HERE. GETTING A PROBLEM WHEN EDITING THE USER PERMISSIONS ON THE EMPLOYEE EDIT USER PAGE
         */

        // update the users table
        $user = User::find($employee->user_id);
        $user->permissions = $request->input('permissions');
        
        $user->save();

        // update the employee info table
        $employeeInfo = EmployeeInfo::find($request->input('id'));
        $employeeInfo->birthday = $request->input('birthday');
        $employeeInfo->phone = $request->input('phone');
        $employeeInfo->email = $request->input('email');
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
