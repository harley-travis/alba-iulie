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
				<li class="breadcrumb-item active">Edit Employee Profile</li>
			</ol>
		</div>
		<div class="col-md-7 align-self-center right">
        <form action="{{ route('employees.update') }}" method="post">
            <button type="submit" class="btn btn-success">Save</button>
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

                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control form-control-lg" name="first_name" value="{{ $employee->first_name }}">
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control form-control-lg" name="last_name" value="{{ $employee->last_name }}">
                </div>

                <div class="form-group">
                    <label for="birthday">Birthday</label>
                    <input type="date" class="form-control form-control-lg" name="birthday" value="{{ $employee->birthday }}">
                </div>

                <div class="form-group">
                    <label for="phone">Personal Phone</label>
                    <input type="text" class="form-control form-control-lg" name="phone" value="{{ $employee->phone }}">
                </div>
                
                <div class="form-group">
                    <label for="email">Personal Email</label>
                    <input type="text" class="form-control form-control-lg" name="email" value="{{ $employee->email }}">
                </div>

                <div class="form-group">
                    <label for="address_1">Address 1 </label>
                    <input type="text" class="form-control form-control-lg" name="address_1" value="{{ $employee->address_1 }}">
                </div>

                <div class="form-group">
                    <label for="address_2">Address 2 </label>
                    <input type="text" class="form-control form-control-lg" name="address_2" value="{{ $employee->address_2 }}">
                </div>

                <div class="form-group">
                    <label for="address_3">Address 3 </label>
                    <input type="text" class="form-control form-control-lg" name="address_3" value="{{ $employee->address_3 }}">
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control form-control-lg" name="city" value="{{ $employee->city }}">
                </div>

                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" class="form-control form-control-lg" name="state" value="{{ $employee->state }}">
                </div>

                <div class="form-group">
                    <label for="zip">Zip </label>
                    <input type="text" class="form-control form-control-lg" name="zip" value="{{ $employee->zip }}">
                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control form-control-lg" name="country" value="{{ $employee->country }}">
                </div>

                @if($employee->married === 0)

                <div class="form-group">
                    Married<br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="married" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="married">No</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="married" class="custom-control-input" value="{{ $employee->married }}" checked>
                        <label class="custom-control-label" for="married">Yes</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="spouse_name">Spouse Name</label>
                    <input type="text" class="form-control form-control-lg" name="spouse_name" value="{{ $employee->spouse_name }}">
                </div>

                @elseif ($employee->married === 1)

                <div class="form-group">
                    Married<br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="married" name="married" class="custom-control-input" value="{{ $employee->married }}" checked>
                        <label class="custom-control-label" for="married">No</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="married" name="married" class="custom-control-input" value="0">
                        <label class="custom-control-label" for="married">Yes</label>
                    </div>
                </div>

                @endif
                
                <div class="form-group">
                    <label for="emergency_contact">Emergency Contact</label>
                    <input type="text" class="form-control form-control-lg" name="emergency_contact" value="{{ $employee->emergency_contact }}">
                </div>

                <div class="form-group">
                    <label for="emergency_contact_phone">Emergency Contact Phone</label>
                    <input type="text" class="form-control form-control-lg" name="emergency_contact_phone" value="{{ $employee->emergency_contact_phone }}">
                </div>

            </div><!-- card-body -->
        </div><!-- card -->

        <div class="card">
            <div class="card-body">
                <h2>Employee Information</h2>

                <div class="form-group">
                    <label for="date_hired">Date Hired</label>
                    <input type="date" class="form-control form-control-lg" name="date_hired" value="{{ $employee->date_hired }}">
                </div>

                <div class="form-group">
                    <label for="work_email">Work Email</label>
                    <input type="text" class="form-control form-control-lg" name="work_email" value="{{ $employee->work_email }}">
                </div>

                <div class="form-group">
                    <label for="work_phone">Work Phone</label>
                    <input type="text" class="form-control form-control-lg" name="work_phone" value="{{ $employee->work_phone }}">
                </div>

                <div class="form-group">
                    <label for="ext">EXT</label>
                    <input type="text" class="form-control form-control-lg" name="ext" value="{{ $employee->ext }}">
                </div>

                <div class="form-group">
                    Gender<br />

                    @if($employee->gender === 0)

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="{{ $employee->gender }}" checked>
                            <label class="form-check-label" for="inlineRadio1">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="1">
                            <label class="form-check-label" for="inlineRadio2">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="2">
                            <label class="form-check-label" for="inlineRadio2">Unspecified</label>
                        </div>

                    @elseif ($employee->gender === 1)

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="0">
                            <label class="form-check-label" for="inlineRadio1">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="{{ $employee->gender }}" checked>
                            <label class="form-check-label" for="inlineRadio2">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="2">
                            <label class="form-check-label" for="inlineRadio2">Unspecified</label>
                        </div>

                    @elseif ($employee->gender === 2)

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="0">
                            <label class="form-check-label" for="inlineRadio1">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="1">
                            <label class="form-check-label" for="inlineRadio2">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="{{ $employee->gender }}" checked>
                            <label class="form-check-label" for="inlineRadio2">Unspecified</label>
                        </div>

                    @endif

                </div>

                <div class="form-group">
                    Disability<br />

                    @if($employee->disability === 0)

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="disability" value="{{ $employee->disability }}" checked>
                            <label class="form-check-label" for="inlineRadio1">Not Disabled</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="disability" value="1">
                            <label class="form-check-label" for="inlineRadio2">Disabled</label>
                        </div>

                    @elseif ($employee->disability === 1)

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="disability" value="0">
                            <label class="form-check-label" for="inlineRadio1">Not Disabled</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="disability" value="{{ $employee->disability }}" checked>
                            <label class="form-check-label" for="inlineRadio2">Disabled</label>
                        </div>

                    @endif

                </div>

                <div class="form-group">
                    <label for="duration">Duration</label>
                    <select name="duration" class="form-control form-control-lg">
                        <option {{ $employee->duration == 'Full-Time' ? 'selected':'' }}>Full-Time</option>
                        <option {{ $employee->duration == 'Part-Time' ? 'selected':'' }}>Part-Time</option>
                        <option {{ $employee->duration == 'Contract' ? 'selected':'' }}>Contract</option>
                        <option {{ $employee->duration == 'Temporary' ? 'selected':'' }}>Temporary</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" class="form-control form-control-lg" name="position" value="{{ $employee->position }}">
                </div>

                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" class="form-control form-control-lg" name="department" value="{{ $employee->department }}">
                </div>

                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control form-control-lg" name="location" value="{{ $employee->location }}">
                </div>

                <div class="form-group">

                    @if($employee->compensationType === 0)

                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="compensationType" value="{{ $employee->compensationType }}" id="salary" checked>
                        <label class="form-check-label" for="inlineRadio1">Salary</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="compensationType" value="1" id="hourly">
                        <label class="form-check-label" for="inlineRadio2">Hourly</label>
                        </div>

                    @elseif ($employee->compensationType === 1)

                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="compensationType" value="0" id="salary">
                        <label class="form-check-label" for="inlineRadio1">Salary</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="compensationType" value="{{ $employee->compensationType }}" id="hourly" checked>
                        <label class="form-check-label" for="inlineRadio2">Hourly</label>
                        </div>

                    @endif

                </div>

                <div class="form-group">
                    <label for="compensationAmount">Compensation Amount</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                        </div>
                        <input type="text" class="form-control form-control-lg" id="compensationAmount" name="compensationAmount" value="{{ $employee->compensationAmount }}" placeholder="65,000">
                    </div>
                </div>

                    <input type="hidden" name="active" value="1">
                    <input type="hidden" name="id" value="{{ $employee->id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>

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

.right {
    text-align: right;
}

</style>
<!-- REMOVE THIS WHEN YOU FIGURE OUT YOUR NPM PROBLEM -->

@endsection