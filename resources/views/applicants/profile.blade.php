@extends('layouts.master')

@section('content')
	
  <div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
                <h3 class="text-themecolor">{{ $applicant->first_name }} {{ $applicant->last_name }}</h3>
                <h4 class="text-success">
                    @foreach($applicant->jobs as $job)
                        {{ $job->title }}
                      @endforeach</h4>
                </div>

                <a class="btn btn-success" href="{{$applicant->resume}}" target="_blank">View Resume</a>
                <a class="btn btn-info" href="#">Next Step</a>

                <span class="text-danger">INTERVIEW STEP HERE </span>
                <span>Applied {{ $applicant->date_applied }} </span>
                <span>{{ $applicant->phone }} </span>
                <span><a href="mailto:{{ $applicant->email }}">{{ $applicant->email }}</a></span>
                <span class="text-danger">ETHNICITY</span>
                <span class="text-danger">VETERAN</span>
                <span class="text-danger">DISABILITY</span>

                <label for="customRange2">Example range</label>
<input type="range" class="custom-range" min="0" max="5" id="customRange2">

                <!-- CREATE THE COMMENTERS HERE 
                https://appdividend.com/2018/06/20/create-comment-nesting-in-laravel/ -->


            </div>
        </div>
  </div>

@endsection