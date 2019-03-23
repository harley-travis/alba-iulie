@extends('layouts.master')

@section('content')
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-themecolor">Applicants</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('dashboard.overview') }}">Home</a></li>
				<li class="breadcrumb-item active">Applicants</li>
			</ol>
		</div>
		<div class="col-md-7 align-self-center">
			
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->

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
                  <th>Email</th>
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
                    <td>{{ $applicant->email }}</td>
                    <td>{{ $applicant->date_applied }}</td>
                    <td><a href="{{ $applicant->resume }}" class="btn btn-info" target="_blank">View Resume</a></td>
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

@endsection