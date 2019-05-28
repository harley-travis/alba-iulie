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
		<div class="col-md-7 align-self-center text-right">
        
         
        </div>
	</div>

	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->

@include('layouts.errors')


<div class="row">
    <div class="col-12">
    <form action="{{ route('employees.add') }}" method="post"  enctype="multipart/form-data">
        <div class="card">
            <div class="card-body">
                <h2>Personal Information</h2>
                
                <div class="form-group">
                    <label for="avatar">Upload Picture</label>
                    <input type="file" class="form-control-file" id="avatar" name="avatar">
                </div>

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
                        <input type="radio" name="married" class="custom-control-input" value="0">
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
                        <label for="permissions">Employee Permissions</label>
                        <select name="permissions" class="form-control form-control-lg">
                            <option value="0">Employee</option>
                            <option value="1">Manager</option>
                            <option value="2">Executive</option>
                            <option value="3">Admin</option>
                        </select>
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
                            <input class="form-check-input" type="radio" name="gender" value="0">
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

                    </div>

                    <div class="form-group">
                        Disability<br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="disability" value="0">
                            <label class="form-check-label" for="inlineRadio1">Not Disabled</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="disability" value="1">
                            <label class="form-check-label" for="inlineRadio2">Disabled</label>
                        </div>
                    </div>

                    <div class="form-group">     
                        Veteran<br />
                        <div class="form-check form-check-inline">
                            <input type="radio" name="veteran" class="form-check-input" value="0">
                            <label class="custom-control-label" for="veteran" >No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="veteran" class="form-check-input" value="1">
                            <label class="custom-control-label" for="veteran" >Yes</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="duration">Duration</label>
                        <select name="duration" class="form-control form-control-lg">
                            <option value="0">Full-Time</option>
                            <option value="1">Part-Time</option>
                            <option value="2">Contract</option>
                            <option value="3">Temporary</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="ethnicity">Ethnicity</label>
                        <select name="ethnicity" class="form-control form-control-lg">
                            <option selected>Select One</option>
                            <option value="0">American Indian or Alaska Native</option>
                            <option value="1">Asian</option>
                            <option value="2">Black or African American</option>
                            <option value="3">Hispanic or Latino</option>
                            <option value="4">Native Hawaiian or Other Pacific Islander</option>
                            <option value="5">White</option>
                            <option value="6">Other</option>
                            <option value="7">Choose not to Identify</option>
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
                            <input class="form-check-input" type="radio" name="compensationType" value="0">
                            <label class="form-check-label" for="inlineRadio1">Salary</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="compensationType" value="1">
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

                    <button type="submit" class="btn btn-success">Save</button>
                

            </div><!-- card-body -->
        </div><!-- card -->
        </form>
    </div><!-- col-12 -->
</div><!-- row -->

@endsection
