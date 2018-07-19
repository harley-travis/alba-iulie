@extends('layouts.master')

@section('content')
<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-themecolor">Positions Overview</h3>
			<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Positions Overview</a></li>
				<li class="breadcrumb-item active">Edit Position</li>
			</ol>
		</div>
		<div class="col-md-7 align-self-center">
    <form action="{{ route('jobs.update') }}" method="post">
    <button type="submit" class="btn btn-success btn-lg">Save Job</button>
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

          

            <div class="form-group">
              <label for="jobTitle">Job Title</label>
              <input type="text" class="form-control form-control-lg" id="title" name="title" value="{{ ucwords(trans( $job->title )) }}">
            </div>

            <!-- todo: loop through company locations -->
            <div class="form-group">
              <label for="location">Location</label>
              <select name="location" class="form-control form-control-lg">
                <option {{ $job->location == 'Arizona' ? 'selected':'' }} >Arizona</option>
                <option {{ $job->location == 'California' ? 'selected':'' }} >California</option>
                <option {{ $job->location == 'Romania' ? 'selected':'' }} >Romania</option>
                <option {{ $job->location == 'Utah' ? 'selected':'' }} >Utah</option>
              </select>
            </div>

            <!-- todo: loop through company departments -->
            <div class="form-group">
              <label for="department">Department</label>
              <select name="department" class="form-control form-control-lg">
                <option>- Select Department -</option>
                <option {{ $job->department == 'Tech Support' ? 'selected':'' }}>Tech Support</option>
                <option {{ $job->department == 'Engineering' ? 'selected':'' }}>Engineering</option>
                <option {{ $job->department == 'Product' ? 'selected':'' }}>Product</option>
              </select>
            </div>

            <div class="form-group">
              <label for="duration">Duration</label>
              <select name="duration" class="form-control form-control-lg">
                <option {{ $job->duration == 'Full-Time' ? 'selected':'' }}>Full-Time</option>
                <option {{ $job->duration == 'Part-Time' ? 'selected':'' }}>Part-Time</option>
                <option {{ $job->duration == 'Contract' ? 'selected':'' }}>Contract</option>
                <option {{ $job->duration == 'Temporary' ? 'selected':'' }}>Temporary</option>
              </select>
            </div>

            <div class="form-group">

              @if($job->compensationType === 0)

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="compensationType" value="{{ $job->compensationType }}" id="salary" checked>
                  <label class="form-check-label" for="inlineRadio1">Salary</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="compensationType" value="1" id="hourly">
                  <label class="form-check-label" for="inlineRadio2">Hourly</label>
                </div>

              @elseif ($job->compensationType === 1)

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="compensationType" value="0" id="salary">
                  <label class="form-check-label" for="inlineRadio1">Salary</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="compensationType" value="{{ $job->compensationType }}" id="hourly" checked>
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
                <input type="text" class="form-control form-control-lg" id="compensationAmount" name="compensationAmount" value="{{ $job->compensationAmount }}" placeholder="65,000">
              </div>
            </div>

            <div class="form-group">
              <label for="closeDate">Close Date</label>
              <input type="date" name="closeDate" value="{{ $job->closeDate }}">
            </div>    

            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" id="description" value="">{{ $job->description }}</textarea>
            </div>

            <div class="form-group">
              <label for="work">What You'll Do</label>
              <textarea name="work" id="work" value="">{{ $job->work }}</textarea>
            </div>

            <div class="form-group">
              <label for="qualifications">Qualifications</label>
              <textarea name="qualifications" id="qualifications" value="">{{ $job->qualifications }}</textarea>
            </div>

            <div class="form-group">
              <label for="skills">Preferred Skills</label>
              <textarea name="skills" id="skills" value="">{{ $job->skills }}</textarea>
            </div>


            <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Interview Questions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">3rd Party Job Boards</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Social Media</a>
            </li>
            </ul>
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h3>Create a question</h3>
            <p>Creating questions for the job helps the team to stay consistent with the interview process. Click the 'Add Qustion' button below to create a new button. The question will display on the applicants profile page.  You can use the applicant profile page as an interviewing tool.</p>
            <button class="btn btn-info">Add Question</button>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <h3>Publish Job To 3rd Party Job Boards</h3>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <h3>Post To Social Media</h3>
              <p>Check back soon!</p>
            </div>
            </div>



            <input type="hidden" name="isActive" value="1">

            <!-- this is how the edit form knows which id to target -->
            <input type="hidden" name="id" value="{{ $jobId }}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <button type="submit" class="btn btn-success btn-lg">Save Job</button>

          </form>

        </div><!-- card-body -->
      </div><!-- card -->
  </div><!-- col-12 -->
</div><!-- row -->

@endsection
