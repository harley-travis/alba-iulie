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
				<li class="breadcrumb-item active">Employee Profile</li>
			</ol>
		</div>
		<div class="col-md-7 align-self-center">
		</div>
	</div>

	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->

@include('layouts.errors')


<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">
                <h2>Personal Information</h2>
                
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
                    <span class="employee-info">{{ $employee->address_1 }} {{ $employee->address_2 }} {{ $employee->address_3 }} {{ $employee->city }}, {{ $employee->zip }}</span>
                </div>

                @if (($employee->married) == 0)
                <div class="employee-card">
                    <span class="employee-label">Spouse</span>
                    <span class="employee-info">{{ $employee->spouse_name }}</span>
                </div>
                @endif

                <div class="employee-card">
                    <span class="employee-label">Emergency Contact</span>
                    <span class="employee-info">{{ $employee->emergency_contact }}</span><br>
                    <span class="employee-info">{{ $employee->emergency_contact_phone }}</span>
                </div>


            </div><!-- card-body -->
        </div><!-- card -->

        <div class="card">
            <div class="card-body">
                <h2>Employee Information</h2>

                @if (($employee->active) == 1)
                <div class="employee-card">
                    <span class="employee-label red">Date Employee Left</span>
                    <span class="employee-info red">{{ $employee->date_left }}</span>
                </div>
                @endif

                <div class="employee-card">
                    <span class="employee-label">Date Hired</span>
                    <span class="employee-info">{{ $employee->date_hired }}</span>
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

            </div><!-- card-body -->
        </div><!-- card -->

    </div><!-- col-12 -->
</div><!-- row -->


<style>

.employee-card {
    display: block;
    padding: 15px 0;
}

span.employee-label {
    font-weight: bold;
    display: block;
}

.red {
    color: red;
}

</style>

@endsection
