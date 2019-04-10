@extends('layouts.master')

@section('content')
<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->

	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-themecolor">Add Employee</h3>
			<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.overview') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('employees.overview') }}">Employees</a></li>
				<li class="breadcrumb-item active">Add Employee</li>
			</ol>
		</div>
		<div class="col-md-7 align-self-center right">
        <form action="{{ route('employees.add') }}" method="post">
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
                    <input type="text" class="form-control form-control-lg" name="first_name">
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control form-control-lg" name="last_name">
                </div>

                <div class="form-group">
                    <label for="birthday">Birthday</label>
                    <input type="date" class="form-control form-control-lg" name="birthday">
                </div>

                <div class="form-group">
                    <label for="phone">Personal Phone</label>
                    <input type="text" class="form-control form-control-lg" name="phone">
                </div>
                
                <div class="form-group">
                    <label for="email">Personal Email</label>
                    <input type="email" class="form-control form-control-lg" name="email">
                </div>

                <div class="form-group">
                    <label for="address_1">Address 1 </label>
                    <input type="text" class="form-control form-control-lg" name="address_1">
                </div>

                <div class="form-group">
                    <label for="address_2">Address 2 </label>
                    <input type="text" class="form-control form-control-lg" name="address_2">
                </div>

                <div class="form-group">
                    <label for="address_3">Address 3 </label>
                    <input type="text" class="form-control form-control-lg" name="address_3">
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control form-control-lg" name="city">
                </div>

                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" class="form-control form-control-lg" name="state">
                </div>

                <div class="form-group">
                    <label for="zip">Zip </label>
                    <input type="text" class="form-control form-control-lg" name="zip">
                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control form-control-lg" name="country">
                </div>

                <div class="form-group">
                    Married<br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="married" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="married">No</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="married" class="custom-control-input">
                        <label class="custom-control-label" for="married">Yes</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="spouse_name">Spouse Name</label>
                    <input type="text" class="form-control form-control-lg" name="spouse_name">
                </div>
              
                
                <div class="form-group">
                    <label for="emergency_contact">Emergency Contact</label>
                    <input type="text" class="form-control form-control-lg" name="emergency_contact">
                </div>

                <div class="form-group">
                    <label for="emergency_contact_phone">Emergency Contact Phone</label>
                    <input type="text" class="form-control form-control-lg" name="emergency_contact_phone">
                </div>

            </div><!-- card-body -->
        </div><!-- card -->

        <div class="card">
            <div class="card-body">
                <h2>Employee Information</h2>

                <div class="form-group">
                    <label for="date_hired">Date Hired</label>
                    <input type="date" class="form-control form-control-lg" name="date_hired">
                </div>

                <div class="form-group">
                    <label for="work_email">Work Email</label>
                    <input type="text" class="form-control form-control-lg" name="work_email">
                </div>

                <div class="form-group">
                    <label for="work_phone">Work Phone</label>
                    <input type="text" class="form-control form-control-lg" name="work_phone">
                </div>

                <div class="form-group">
                    <label for="ext">EXT</label>
                    <input type="text" class="form-control form-control-lg" name="ext">
                </div>

                <div class="form-group">
                    Gender<br />

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender">
                        <label class="form-check-label" for="inlineRadio1">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender">
                        <label class="form-check-label" for="inlineRadio2">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender">
                        <label class="form-check-label" for="inlineRadio2">Unspecified</label>
                    </div>

                </div>

                <div class="form-group">
                    Disability<br />

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="disability">
                            <label class="form-check-label" for="inlineRadio1">Not Disabled</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="disability">
                            <label class="form-check-label" for="inlineRadio2">Disabled</label>
                        </div>
                </div>

                <div class="form-group">
                    <label for="duration">Duration</label>
                    <select name="duration" class="form-control form-control-lg">
                        <option>Full-Time</option>
                        <option>Part-Time</option>
                        <option>Contract</option>
                        <option>Temporary</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" class="form-control form-control-lg" name="position">
                </div>

                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" class="form-control form-control-lg" name="department">
                </div>

                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control form-control-lg" name="location">
                </div>

                <div class="form-group">

                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="compensationType">
                    <label class="form-check-label" for="inlineRadio1">Salary</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="compensationType" id="hourly">
                    <label class="form-check-label" for="inlineRadio2">Hourly</label>
                    </div>

                </div>

                <div class="form-group">
                    <label for="compensationAmount">Compensation Amount</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                        </div>
                        <input type="text" class="form-control form-control-lg" name="compensationAmount">
                    </div>
                </div>

                    <input type="hidden" name="active" value="1">
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
