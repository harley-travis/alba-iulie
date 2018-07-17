@extends('layouts.master')

@section('content')

  <h2>Add New Job</h2>
  
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
	
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
          <option value="full-time">Full-Time</option>
          <option value="part-time">Part-Time</option>
          <option value="contract">Contract</option>
          <option value="temporary">Temporary</option>
        </select>
      </div>

      <div class="form-group">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="compensationType" id="salary" value="0" checked>
          <label class="form-check-label" for="inlineRadio1">Salary</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="compensationType" id="hourly" value="1">
          <label class="form-check-label" for="inlineRadio2">Hourly</label>
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

      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <button type="submit" class="btn btn-success btn-lg">Save Job</button>

    </form>

    <!-- todo: style the tabs section -->
    <style>
.nav-tabs .nav-link.active {
    background-color: #eee;
    border-color: transparent;
}
#myTabContent {
    background: #EEE !important;
    padding: 20PX;
}
</style>



@endsection
