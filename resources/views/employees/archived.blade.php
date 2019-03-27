@extends('layouts.master')

@section('content')
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-themecolor">Archived Employees</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item active">Archived Employees</li>
			</ol>
		</div>
		<div class="col-md-7 align-self-center right">
			<a href="{{ route('employees.overview') }}" class="btn waves-effect waves-light btn-success">Current Employees</a>
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
									<th>Employee ID</th>
									<th>Name</th>
									<th>Department</th>
									<th>Position</th>
									<th>Phone</th>
									<th>View Employee</th>
								</tr>
							</thead>
							<tbody>
						
								@foreach($employees as $employee)
									<tr>
										<td>
											<div class="form-group">
												<div class="checkbox checkbox-success">
													<input id="checkbox-{{$employee->id}}" type="checkbox">
													<label for="checkbox-{{$employee->id}}">  </label>
												</div>
											</div>
										</td>
										<td>{{ $employee->id}}</td>
										<td><a href="{{ route('employees.view', ['id' => $employee->id ]) }}">{{ $employee->first_name }} {{ $employee->last_name}}<a/></td>
										<td>{{ $employee->department}}</td>
										<td>{{ $employee->position}}</td>
										<td>{{ $employee->work_phone }} {{ $employee->ext}}</td>
										<td><a href="{{ route('employees.view', ['id' => $employee->id ]) }}" class="btn waves-effect waves-light btn-info">View Employee</a></td>
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
		{!! $employees->links() !!}
	</div>

	<style>
		.right {
			text-align: right;
		}
	</style>
	

@endsection
