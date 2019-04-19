@extends('layouts.master')

@section('content')
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-themecolor">Tickets</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item">Tickets</li>
				<li class="breadcrumb-item active">Submit a Ticket</li>
			</ol>
		</div>
		<div class="col-md-7 align-self-center">
			
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
                
                    <form action="{{ route('tickets.create') }}" method="post">
                       
						<div class="form-group">
							<label for="subject">Subject</label>
							<input type="text" class="form-control form-control-lg" name="subject">
						</div>

						<div class="form-group">
							<label for="issue">What is the Prolem?</label>
							<textarea class="form-control" name="issue" rows="5"></textarea>
						</div>

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						
						<button type="submit" class="btn btn-success">Submit</button>

                    </form>

				</div>
			</div>
		</div>
	</div><!-- row -->
	

@endsection