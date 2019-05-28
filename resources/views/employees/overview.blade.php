@extends('layouts.master')

@section('content')
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-themecolor">Employee Directory</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item active">Employees</li>
			</ol>
		</div>
		<div class="col-md-7 align-self-center text-right">

			@if(auth()->user()->permissions >= 3)
			<a href="{{ route('employees.archived') }}" class="btn waves-effect waves-light btn-outline-dark">Archived Employees</a>
			<a href="{{ route('employees.create') }}" class="btn waves-effect waves-light btn-outline-success">Add Employee</a>
			@endif

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
									<th></th>
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
										<td class="align-middle">
											<a href="{{ route('employees.view', ['id' => $employee->id ]) }}">
												<div class="employee-avatar-overview" style="background-image:url({{ $employee->avatar }})"></div>
											</a>
										</td>
										<td class="align-middle"><a href="{{ route('employees.view', ['id' => $employee->id ]) }}">{{ $employee->first_name }} {{ $employee->last_name}}</a></td>
										<td class="align-middle">{{ $employee->department}}</td>
										<td class="align-middle">{{ $employee->position}}</td>
										<td class="align-middle">{{ $employee->work_phone }} ext:{{ $employee->ext}}</td>
										<td class="align-middle"><a href="{{ route('employees.view', ['id' => $employee->id ]) }}" class="btn waves-effect waves-light btn-outline-info">View Employee</a></td>
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
	
@endsection
