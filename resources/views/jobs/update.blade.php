@extends('layouts.app')

@section('content')

<h2>Edit </h2>
	
    <form action="{{ route('jobs.add') }}" method="post">

      <div class="form-group">
        <label for="jobTitle">Job Title</label>
        <input type="text" class="form-control form-control-lg" id="title" name="title" placeholder="IE Frontend Developer">
      </div>

      <div class="form-group">
        <label for="location">Location</label>
        <select class="form-control form-control-lg">
          <option>Utah</option>
          <option>Arizona</option>
          <option>California</option>
          <option>Romania</option>
          <option>Nevada</option>
        </select>
      </div>

      <div class="form-group">
        <label for="department">Department</label>
        <select class="form-control form-control-lg">
          <option>Marketing</option>
          <option>Tech Support</option>
          <option>Engineering</option>
          <option>Product</option>
        </select>
      </div>

      <div class="form-group">
        <label for="duration">Duration</label>
        <select class="form-control form-control-lg">
          <option>Full-Time</option>
          <option>Part-Time</option>
          <option>Contract</option>
          <option>Temporary</option>
        </select>
      </div>

      <div class="form-group">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="compensationType" id="salary" value="salary">
          <label class="form-check-label" for="inlineRadio1">Salary</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="compensationType" id="hourly" value="hourly">
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


      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <!-- need this hidden input to decipher which job to edit -->
      <input type="hidden" name="id" value="{{ $jobId }}">
      <button type="submit" class="btn btn-success btn-lg">Save Job</button>

    </form>
	

@endsection
