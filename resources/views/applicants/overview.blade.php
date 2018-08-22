@extends('layouts.master')

@section('content')
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-themecolor">Applicants</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
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
						<table class="table">
							<thead>
                <tr>
                  <th class="mdl-data-table__cell--non-numeric">ID</th>
                  <th>Applicant</th>
                  <th>Position</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Date</th>
                  <th>Resume</th>
                </tr>
							</thead>
							<tbody>
                @foreach($applicants as $applicant)
                  <tr>
                    <td class="mdl-data-table__cell--non-numeric">{{ $applicant->id }}</td>
                    <td>{{ $applicant->first_name }} {{ $applicant->last_name }}</td>
                    <td>
                      @foreach($applicant->jobs as $job)
                        {{ $job->title }}
                      @endforeach
                    </td>
                    <td>{{ $applicant->phone }}</td>
                    <td>{{ $applicant->email }}</td>
                    <td>{{ $applicant->date_applied }}</td>
                    <td><a href="{{ $applicant->resume }}" target="_blank">Resume</a></td>
                  </tr>
								@endforeach
							</tbody>
						</table>
					</div><!-- table-responsive -->
				</div><!-- card-body -->
			</div><!-- card -->
		</div><!-- col-12 -->
	</div><!-- row -->

@endsection