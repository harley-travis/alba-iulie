@extends('layouts.master')

@section('content')

  <!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-themecolor">Add Position</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('dashboard.overview') }}">Home</a></li>
				<li class="breadcrumb-item">Positions</li>
        <li class="breadcrumb-item active">New Job</li>
			</ol>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	
  <div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
          <form action="{{ route('jobs.add') }}" method="post">

            <div class="form-group">
              <label for="jobTitle">Job Title</label>
              <input type="text" class="form-control form-control-lg" id="title" name="title" placeholder="IE Frontend Developer">
            </div>

            <!-- todo: loop through company locations -->
            <div class="form-group">
              <label for="location">Location</label>
              <select name="location" class="form-control form-control-lg">
                <option>- Select Location -</option>
                <option value="arizona">Arizona</option>
                <option value="california">California</option>
                <option value="romania">Romania</option>
                <option value="utah">Utah</option>
              </select>
            </div>

            <!-- todo: loop through company departments -->
            <div class="form-group">
              <label for="department">Department</label>
              <select name="department" class="form-control form-control-lg">
                <option>- Select Department -</option>
                <option value="tech_support">Tech Support</option>
                <option value="engineering">Engineering</option>
                <option value="product">Product</option>
              </select>
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
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="compensationType" id="salary" value="0" checked>
                <label class="form-check-label" for="salary">Salary</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="compensationType" id="hourly" value="1">
                <label class="form-check-label" for="hourly">Hourly</label>
              </div>
            </div>
          
            <div class="form-group">
              <label for="compensationAmount">Compensation Amount</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                  </div>
                  <input type="text" class="form-control form-control-lg" id="compensationAmount" name="compensationAmount" placeholder="65,000">
                </div>
              </div>

            <div class="form-group">
              <label for="closeDate">Close Date</label>
              <input type="date" name="closeDate">
            </div>    

            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" id="description"></textarea>
            </div>

            <div class="form-group">
              <label for="work">What You'll Do</label>
              <textarea name="work" id="work"></textarea>
            </div>

            <div class="form-group">
              <label for="qualifications">Qualifications</label>
              <textarea name="qualifications" id="qualifications"></textarea>
            </div>

            <div class="form-group">
              <label for="skills">Preferred Skills</label>
              <textarea name="skills" id="skills"></textarea>
            </div>
            
          
          
            <input type="hidden" name="isActive" value="1">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <button type="submit" class="btn btn-success">Save Job</button>

          </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- todo: style the tabs section -->
<style>

</style>


@endsection
