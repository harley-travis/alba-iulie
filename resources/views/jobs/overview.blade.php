@extends('layouts.app')

@section('content')
	@if(Session::has('info'))
		<div class="alert alert-success" role="alert">
			<h4 class="alert-heading">Success!</h4>
			<p>{{ Session::get('info') }}</p>
		</div>
	@endif

<div class="travis"</div>
	<h2>Positions</h2>

	<a href="{{ route('jobs.add') }}" class="btn btn-success">Add Job</a>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Library</a></li>
			<li class="breadcrumb-item active" aria-current="page">Data</li>
		</ol>
	</nav>

	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th scope="col">Action</th>
				<th scope="col">Job ID</th>
				<th scope="col">Position</th>
				<th scope="col">Department</th>
				<th scope="col">Location</th>
				<th scope="col"></th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			@foreach($jobs as $job)
				<tr>
					<td>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
						</div>
					</td>
					<td>{{ $job->id}}</td>
					<td>{{ $job->title}}</td>
					<td>{{ $job->department}}</td>
					<td>{{ $job->location}}</td>
					<td><a href="{{ route('jobs.update', ['id' => $job->id ]) }}" class="btn btn-purple-1">Edit Job</a></td>
					<td><a href="" class="btn btn-danger">Archive Job</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

	<!-- <jobs-overview></jobs-overview>	 -->

@endsection
