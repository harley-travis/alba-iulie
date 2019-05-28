@extends('layouts.master')

@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->

	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-themecolor">{{ $employee->first_name }} {{ $employee->last_name }}</h3>
			<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.overview') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('employees.overview') }}">Employees</a></li>
				<li class="breadcrumb-item active">{{ $employee->first_name }} {{ $employee->last_name }}</li>
			</ol>
		</div>
		<div class="col-md-7 align-self-center text-right">

        @if(auth()->user()->permissions === 3)
            <a href="{{ route('employees.archive', ['id' => $employee->user_id ]) }}" class="btn waves-effect waves-light btn-outline-danger">Remove Employee</a>
        @endif

        @if($employee->work_email === auth()->user()->email || auth()->user()->permissions === 3)
            <a href="{{ route('employees.edit', ['id' => $employee->user_id ]) }}" class="btn waves-effect waves-light btn-outline-info">Edit Information</a>
        @endif
             
        
        </div>
	</div>

	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->

@include('layouts.errors')

<div class="row">
    <div class="col-3">
        <div class="card">
            <div class="card-body m-auto">
                <div class="avatar-wrapper">
                    <div class="employee-avatar-profile" style="background-image:url({{ $employee->avatar }})"></div>
                </div>

                <ul class="employee-data mt-5">
                    <li class="employee-info">{{ $employee->first_name }} {{ $employee->last_name }}</li>
                    <hr/>
                    <li class="employee-info">Phone:{{ $employee->work_phone }} EXT: {{ $employee->ext }}</li>
                    <li class="employee-info">Email: {{ $employee->email }}</li>
                    <li class="employee-info">Date Hired: {{ $employee->date_hired }}</li>
                </ul>

            </div>
        </div>
    </div>

    <div class="col-9">
        <div class="card">
            <div class="card-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="personal-info-tab" data-toggle="tab" href="#personal-info" role="tab" aria-controls="personal-info" aria-selected="true">Personal Information</a>
                        <a class="nav-item nav-link" id="work-info-tab" data-toggle="tab" href="#work-info" role="tab" aria-controls="work-info" aria-selected="false">Work Information</a>
                        <a class="nav-item nav-link" id="emergency-tab" data-toggle="tab" href="#emergency" role="tab" aria-controls="emergency" aria-selected="false">Emergency Contact</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="personal-info" role="tabpanel" aria-labelledby="personal-info-tab">
                    
                    <h2 class="text-themecolor py-4">Personal Information</h2>
                    
                        <div class="employee-card">
                            <span class="employee-label">Birthday</span>
                            <span class="employee-info">{{ $employee->birthday }}</span>
                        </div>

                        <div class="employee-card">
                            <span class="employee-label">Personal Email</span>
                            <span class="employee-info">{{ $employee->email }}</span>
                        </div>

                        <div class="employee-card">
                            <span class="employee-label">Personal Phone</span>
                            <span class="employee-info">{{ $employee->phone }}</span>
                        </div>

                        <div class="employee-card">
                            <span class="employee-label">Address</span>
                            <span class="employee-info">{{ $employee->address_1 }} {{ $employee->address_2 }} {{ $employee->address_3 }} {{ $employee->city }}, {{ $employee->state }}, {{ $employee->zip }}</span>
                        </div>

                        @if (($employee->married) == 0)
                        <div class="employee-card">
                            <span class="employee-label">Spouse</span>
                            <span class="employee-info">{{ $employee->spouse_name }}</span>
                        </div>
                        @endif
                    
                    </div>
                    <div class="tab-pane fade" id="work-info" role="tabpanel" aria-labelledby="work-info-tab">

                        <h2 class="text-themecolor py-4">Employee Information</h2>

                        @if (($employee->active) == 0)
                        <div class="employee-card">
                            <span class="employee-label red">Date Employee Left</span>
                            <span class="employee-info red">{{ $employee->date_left }}</span>
                        </div>
                        @endif

                        <div class="employee-card">
                            <span class="employee-label">Date Hired</span>
                            <span class="employee-info">{{ $employee->date_hired }}</span>
                        </div>

                        @if ( auth()->user()->permissions > 2 )
                        <div class="employee-card">
                            <span class="employee-label">Employee Permissions</span>
                            <span class="employee-info">
                                @if (($employee->permissions) == 0)
                                    Employee
                                @elseif (($employee->permissions) == 1)
                                    Manager
                                @elseif (($employee->permissions) == 2)
                                    Executive
                                @elseif (($employee->permissions) == 3)
                                    Admin
                                @else
                                    There was an error displaying the salary information
                                @endif 
                            </span>
                        </div>
                        @endif

                        <div class="employee-card">
                            <span class="employee-label">Employment Duration</span>
                            <span class="employee-info">
                                @if (($employee->duration) == 0)
                                    Full-Time
                                @elseif (($employee->duration) == 1)
                                    Part-Time
                                @elseif (($employee->duration) == 2)
                                    Contract
                                @elseif (($employee->duration) == 3)
                                    Temporary
                                @else
                                    There was an error displaying the salary information
                                @endif     
                            </span>
                        </div>

                        <div class="employee-card">
                            <span class="employee-label">Work Email</span>
                            <span class="employee-info">{{ $employee->work_email }}</span>
                        </div>

                        <div class="employee-card">
                            <span class="employee-label">Work Phone</span>
                            <span class="employee-info">{{ $employee->work_phone }} EXT: {{ $employee->ext }}</span>
                        </div>

                        <div class="employee-card">
                            <span class="employee-label">Position</span>
                            <span class="employee-info">{{ $employee->position }}</span>
                        </div>

                        <div class="employee-card">
                            <span class="employee-label">Department</span>
                            <span class="employee-info">{{ $employee->department }}</span>
                        </div>

                        <div class="employee-card">
                            <span class="employee-label">Location</span>
                            <span class="employee-info">{{ $employee->location }}</span>
                        </div>

                        <div class="employee-card">
                            <span class="employee-label">Compensation Type</span>
                            <span class="employee-info"> 
                                @if (($employee->compensationType) == 0)
                                    Salary
                                @elseif (($employee->compensationType)  == 1)
                                    Hourly
                                @else
                                    There was an error displaying the salary information
                                @endif               
                            </span>
                        </div>

                        <div class="employee-card">
                            <span class="employee-label">Compensation Amount</span>
                            <span class="employee-info">${{ $employee->compensationAmount }}</span>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="emergency" role="tabpanel" aria-labelledby="emergency-tab">
                    
                        <h2 class="text-themecolor py-4">Emergency Contact Information</h2>

                        <div class="employee-card">
                            <span class="employee-label">Emergency Contact</span>
                            <span class="employee-info">{{ $employee->emergency_contact }}</span><br>
                            <span class="employee-info">{{ $employee->emergency_contact_phone }}</span>
                        </div>

                    </div>
                </div>

                </div>

            </div><!-- card-body -->
        </div><!-- card -->
    </div><!-- col-12 -->
</div><!-- row -->

@endsection
