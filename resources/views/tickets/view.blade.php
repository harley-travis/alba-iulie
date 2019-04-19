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
				<li class="breadcrumb-item"><a href="{{ route('tickets.overview') }}">Ticket</a></li>
				<li class="breadcrumb-item active">Ticket Issue</li>
			</ol>
		</div>
		<div class="col-md-7 align-self-center right">
			<a href="{{ route('tickets.overview') }}" class="btn waves-effect waves-light btn-info">Go Back</a>
			<a href="#" class="btn waves-effect waves-light btn-success">Mark Completed</a>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
				@foreach($tickets as $ticket)
					<h2>{{ $ticket->subject }}</h2>

					<p class="subject">{{ $ticket->issue }}</p>
					@endforeach
				</div>	
			</div>
		</div>
	</div><!-- row -->

	<style>
		.subject {
			margin-top:35px;
		}

		.right {
			text-align: right;
		}
	</style>
	

@endsection
