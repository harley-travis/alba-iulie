@extends('layouts.master')

@section('content')
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="row page-titles">

		<div class="col-sm-2 align-self-center">
			<h3 class="text-themecolor">Applicants</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('dashboard.overview') }}">Home</a></li>
				<li class="breadcrumb-item active"><a href="{{ route('applicants.overview') }}">Applicants</a></li>
			</ol>
		</div>
		<!-- <div class="col-sm-3 right">
			<form action="{{ route('applicants.filterStage') }}" method="get" class="form-inline">    
				<div class="form-group pr-2">
				<label class="mr-sm-2 sr-only" for="stage">Stage</label>
					<select name="stage" class="form-control custom-select">
						<option>- Filter by Stage -</option>
						<option value="8">All Applicants</option>
						<option value="0">New Applicants</option>
						<option value="1">Scheduled First Interview</option>
						<option value="2">Completed First Interview</option>
						<option value="3">Scheduled Second Interview</option>
						<option value="4">Completed Second Interview</option>
						<option value="5">Scheduled Third Interview</option>
						<option value="6">Completed Third Interview</option>
					</select>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</div>
				<button type="submit" class="btn btn-success">Apply</button>
			</form>
		</div> -->
		<div class="col-sm-5 text-right">
			<form action="{{ route('applicants.filterJob') }}" method="get" class="form-inline">    
				<div class="form-group pr-2">
					<label class="mr-sm-2 sr-only" for="job_id">Position</label>
					<select name="job_id" class="form-control custom-select">
						<option>- Filter by Job -</option>
						<option value="000">All Jobs</option>
						@foreach($positions as $position)
							<option value="{{ $position->id }}">{{ $position->title }}</option>
						@endforeach
					</select>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</div>
				<button type="submit" class="btn btn-success">Apply</button>
			</form>
		</div>
		<div class="col-sm-2 text-right">
			<a href="{{ route('applicants.archived') }}" class="btn waves-effect waves-light btn-outline-dark">Archived Applicants</a>
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
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="mdl-data-table__cell--non-numeric">ID</th>
									<th>Applicant</th>
									<th>Position</th>
									<th>Phone</th>
									<th>Stage</th>
									<th>Date Applied</th>
									<th>Resume</th>
								</tr>
							</thead>
							<tbody>
								@foreach($applicants as $applicant)
								<tr>
									<td class="mdl-data-table__cell--non-numeric">{{ $applicant->id }}</td>
									<td><a href="{{ route('applicants.profile', ['id' => $applicant->id ]) }}">{{ $applicant->first_name }} {{ $applicant->last_name }}</a></td>
									<td>
									@foreach($applicant->jobs as $job)
										{{ $job->title }}
									@endforeach
									</td>
									<td>{{ $applicant->phone }}</td>
									<td>
										@if (($applicant->stage) == 0)
											New Applicant
										@elseif (($applicant->stage) == 1)
											Scheduled First Interview
										@elseif (($applicant->stage) == 2)
											Completed First Interview
										@elseif (($applicant->stage) == 3)
											Scheduled Second Interview
										@elseif (($applicant->stage) == 4)
											Completed Second Interview
										@elseif (($applicant->stage) == 5)
											Scheduled Third Interview
										@elseif (($applicant->stage) == 6)
											Completed Third Interview
										@else
												There was an error displaying the stage status
										@endif
									</td>
									<td>{{ $applicant->date_applied }}</td>
									<td><a href="{{ $applicant->resume }}" class="btn btn-outline-info" target="_blank">View Resume</a></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div><!-- table-responsive -->
				</div><!-- card-body -->
			</div><!-- card -->
		</div><!-- col-12 -->
	</div><!-- row -->

  	<div class="pagination-wrapper">
		{{ $applicants->links() }}
	</div>	

	<style>
		.right {
			text-align: right;
			float: right;
			clear: both;
		}
	</style>

@endsection