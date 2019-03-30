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
                <h3 class="text-themecolor">{{ $applicant->first_name }} {{ $applicant->last_name }}</h3>
                <h4 class="text-success">
                    @foreach($applicant->jobs as $job)
                        {{ $job->title }}
                      @endforeach</h4>
                </div>

                <a class="btn btn-success" href="{{$applicant->resume}}" target="_blank">View Resume</a>
                <a class="btn btn-info" href="#">Next Step</a>



                
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

                <!-- CREATE THE COMMENTERS HERE 
                https://appdividend.com/2018/06/20/create-comment-nesting-in-laravel/ -->


            </div>
        </div>
  </div>

@endsection
