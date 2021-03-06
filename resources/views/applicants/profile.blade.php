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
    <div class="col-md-7 align-self-center text-right">
        
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->

@if(Session::has('info'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ Session::get('info') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
	
    <div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">

                    <div class="row">
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
                            </div>
                        </div>
                    </div>
                </div><!-- card body -->

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <h5>
                                <strong>
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
                                </strong>
                            </h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Date Applied</strong>: {{ $applicant->date_applied }}</li>
                                <li class="list-group-item"><strong>Phone:</strong> {{ preg_replace("/\d{3}/", "$0-", str_replace(".", null, trim($applicant->phone)), 2) }}</li>
                                <li class="list-group-item"><strong>Email:</strong> <a href="mailto:{{ $applicant->email }}">{{ $applicant->email }}</a></li>
                                <li class="list-group-item">
                                    <strong>Ethnicity</strong>:
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
                                </li>
                                <li class="list-group-item">
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
                                </li>
                                <li class="list-group-item">
                                    <strong>Veteran</strong>:
                                    @if (($applicant->veteran) == 0)
                                        Not a Veteran
                                    @elseif (($applicant->veteran)  == 1)
                                        Veteran
                                    @else
                                        There was an error displaying veteran status
                                    @endif
                                </li>
                                <li class="list-group-item">
                                    <strong>Disability</strong>:
                                    @if (($applicant->disability) == 0)
                                        Not Disabled
                                    @elseif (($applicant->disability)  == 1)
                                        Disabled
                                    @else
                                        There was an error displaying disability status
                                    @endif
                                </li>
                            </ul>     
                        </div>
                        <div class="col-sm-8 right">
                            <a class="btn btn-outline-info mt-3" href="/{{$applicant->resume}}" target="_blank"><i class="far fa-folder-open"></i> View Resume</a> <br />
                            @if (($applicant->is_active) == 1)
                            <a class="btn mt-3 btn btn-outline-danger" href="{{ route('applicants.archive', ['id' => $applicant->id ]) }}"><i class="fas fa-ban"></i> Pass on Applicant</a>
                            @elseif (($applicant->is_active)  == 0)
                            <a class="btn mt-3 btn btn-outline-success" href="{{ route('applicants.activate', ['id' => $applicant->id ]) }}"><i class="fas fa-toggle-off"></i> Activate Applicant</a>
                            @endif
                        </div>

                        
                    </div>
                    
                    <!-- COMMENTS SECTION 
                        https://github.com/laravelista/comments
                    -->
                    <div class="page-comments">
                        @comments(['model' => $applicant])
                        @endcomments
                    </div>
                </div><!-- card body -->
            </div>
        </div>
  </div>

@endsection
