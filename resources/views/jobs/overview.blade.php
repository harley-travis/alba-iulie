@extends('layouts.master')

@section('content')
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-themecolor">Positions</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('dashboard.overview') }}">Home</a></li>
				<li class="breadcrumb-item active">Positions Overview</li>
			</ol>
		</div>
		<div class="col-md-7 align-self-center right">
			<a href="{{ route('jobs.create') }}" class="btn waves-effect waves-light btn-success">Add Position</a>
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
					<div class="total-jobs">
						
					</div>

					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Action</th>
									<th>Job ID</th>
									<th>Position</th>
									<th>Department</th>
									<th>Location</th>
									<th>Date Created</th>
									<th>Edit Position</th>
									<th>Archive Position</th>
								</tr>
							</thead>
							<tbody>
						
								@foreach($jobs as $job)
									<tr>
										<td>
											<div class="form-group">
												<div class="checkbox checkbox-success">
													<input id="checkbox-{{$job->id}}" type="checkbox">
													<label for="checkbox-{{$job->id}}">  </label>
												</div>
											</div>
										</td>
										<td>{{ $job->id}}</td>
										<td>{{ ucwords(trans( $job->title )) }}</td>
										<td>{{ $job->department}}</td>
										<td>{{ $job->location}}</td>
										<td>{{ $job->created_at->format('m/d/Y')}}</td>
										<td><a href="{{ route('jobs.edit', ['id' => $job->id ]) }}" class="btn waves-effect waves-light btn-info">Edit Job</a></td> 
										<td><a href="{{ route('jobs.archive', ['id' => $job->id ]) }}" class="btn waves-effect waves-light btn-danger">Archive Job</a></td>
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
		{!! $jobs->links() !!}
	</div>

	<!-- REMOVE THIS WHEN YOU FIGURE OUT YOUR NPM PROBLEM -->
	<style>

		.right {
			text-align: right;
		}
	</style>
	
@endsection
