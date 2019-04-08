@extends('layouts.master')

@section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">{{ $applicant->first_name }} {{ $applicant->last_name }}</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.overview') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('applicants.overview') }}">Applicants</a></li>
            <li class="breadcrumb-item active">{{ $applicant->first_name }} {{ $applicant->last_name }}</li>
        </ol>
    </div>
    <div class="col-md-7 align-self-center right">
        
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->

@if(Session::has('info'))
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Success!</h4>
        <p>{{ Session::get('info') }}</p>
    </div>
@endif
	
    <div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">

                    <div class="row mx-md-n5">
                        <div class="col md-5">
                            <div class="">
                                <h3 class="text-themecolor">{{ $applicant->first_name }} {{ $applicant->last_name }}</h3>
                                <h4 class="text-success">
                                    @foreach($applicant->jobs as $job)
                                        {{ $job->title }}
                                    @endforeach
                                </h4>
                            </div>
                        </div>
                        <div class="col md-5">
                            <div class="float-right text-right">
                                <form action="{{ route('applicants.stage') }}" method="POST" class="form-inline">    
                                    <div class="form-group pr-2">
                                        <select name="stage" class="form-control custom-select">
                                            <option>- Select Stage -</option>
                                            <option value="0">Pending</option>
                                            <option value="1">Scheduled First Interview</option>
                                            <option value="2">Completed First Interview</option>
                                            <option value="3">Scheduled Second Interview</option>
                                            <option value="4">Completed Second Interview</option>
                                            <option value="5">Scheduled Third Interview</option>
                                            <option value="6">Completed Third Interview</option>
                                            <option value="7">Hired</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="id" value="{{ $applicant->id }}">
                                    <button type="submit" class="btn btn-success">Apply</button>
                                </form>

                                <a class="btn btn-info mt-3" href="{{$applicant->resume}}" target="_blank">View Resume</a>
                                @if (($applicant->is_active) == 1)
                                <a class="btn mt-3 btn btn-danger" href="{{ route('applicants.archive', ['id' => $applicant->id ]) }}">Pass on Applicant</a>
                                @elseif (($applicant->is_active)  == 0)
                                <a class="btn mt-3 btn btn-success" href="{{ route('applicants.activate', ['id' => $applicant->id ]) }}">Activate Applicant</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div><!-- card body -->

                <div class="card-body">
                                
                    <span><strong>Date Applied</strong>: {{ $applicant->date_applied }}</span>
                    <span><strong>Phone Number</strong>: {{ $applicant->phone }}</span>
                    <span><strong>Email</strong>: <a href="mailto:{{ $applicant->email }}">{{ $applicant->email }}</a></span>
                    <span class="text-danger"><strong>Ethnicity</strong>:
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
                    <strong>Gender</strong>:
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
                    <strong>Veteran</strong>:
                        @if (($applicant->veteran) == 0)
                            Not a Veteran
                        @elseif (($applicant->veteran)  == 1)
                            Veteran
                        @else
                            There was an error displaying veteran status
                        @endif
                    </span>
                    <span class="text-danger">
                    <strong>Disability</strong>:
                        @if (($applicant->disability) == 0)
                            Not Disabled
                        @elseif (($applicant->disability)  == 1)
                            Disabled
                        @else
                            There was an error displaying disability status
                        @endif
                    </span>


                    @if (($applicant->stage) == 0)
                        PENDING
                    @elseif (($applicant->stage) == 1)
                        SCHEDULED FIRST INTERVIEW
                    @elseif (($applicant->stage) == 2)
                        COMPLETED FIRST INTERVIEW
                    @elseif (($applicant->stage) == 3)
                        SCHEDULED SECOND INTERVIEW
                    @elseif (($applicant->stage) == 4)
                        COMPLETED SECOND INTERVIEW
                    @elseif (($applicant->stage) == 5)
                        SCHEDULED THIRD INTERVIEW
                    @elseif (($applicant->stage) == 6)
                        COMPLETED THIRD INTERVIEW
                    @else
                        There was an error displaying the stage status
                    @endif

                    
                

                    <!-- COMMENTS SECTION 
                        https://github.com/laravelista/comments
                    -->
                    @comments(['model' => $applicant])
                    @endcomments
                </div><!-- card body -->
            </div>
        </div>
  </div>

@endsection
