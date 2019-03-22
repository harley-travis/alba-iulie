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

                <span class="">9.5</a>
                <span>Interview Score</span>

                <span class="text-danger">INTERVIEW STEP HERE </span>
                <span>Applied {{ $applicant->date_applied }} </span>
                <span>{{ $applicant->phone }} </span>
                <span><a href="mailto:{{ $applicant->email }}">{{ $applicant->email }}</a></span>
                <span class="text-danger">
                    @if (($applicant->ethnicity) == 0)
                        American Indian or Alaska Native
                    @elseif (($applicant->ethnicity)  == 1)
                        Asian
                    @elseif (($applicant->ethnicity)  == 2)
                        Black or African American
                    @elseif (($applicant->ethnicity)  == 3)
                        Hispanic or Latino
                    @elseif (($applicant->ethnicity)  == 4)
                        Native Hawaiian or Other Pacific Islander
                    @elseif (($applicant->ethnicity)  == 5)
                        White
                    @elseif (($applicant->ethnicity)  == 6)
                        Other
                    @elseif (($applicant->ethnicity)  == 7)
                        Choose not to Identify
                    @else
                        There was an error displaying the ethnicity status
                    @endif                
                </span>
                <span class="text-danger">
                    @if (($applicant->gender) == 0)
                        Female
                    @elseif (($applicant->gender)  == 1)
                        Male
                    @elseif (($applicant->gender)  == 2)
                        Gender not disclosed
                    @else
                        There was an error displaying the gender status
                    @endif
                </span>
                <span class="text-danger">
                    @if (($applicant->veteran) == 0)
                        Not a Veteran
                    @elseif (($applicant->veteran)  == 1)
                        Veteran
                    @else
                        There was an error displaying veteran status
                    @endif
                </span>
                <span class="text-danger">
                    @if (($applicant->disability) == 0)
                        Not Disabled
                    @elseif (($applicant->disability)  == 1)
                        Disabled
                    @else
                        There was an error displaying disability status
                    @endif
                </span>

                <label for="customRange2">Example range</label>
                <input type="range" class="custom-range" min="0" max="5" id="customRange2">

                <!-- CREATE THE COMMENTERS HERE 
                https://appdividend.com/2018/06/20/create-comment-nesting-in-laravel/ -->


            </div>
        </div>
  </div>

@endsection
