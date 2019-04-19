@extends('layouts.master')

@section('content')
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-themecolor">Tickets</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('dashboard.overview') }}">Home</a></li>
				<li class="breadcrumb-item active">Tickets Overview</li>
			</ol>
		</div>
		<div class="col-md-7 align-self-center right">
			<a href="#" class="btn waves-effect waves-light btn-warning"><i class="fa fa-scroll-old"></i> Completed Tickets</a>
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

        @foreach($tickets as $ticket)
		<div class="col-12">
			<div class="card">
				<div class="card-body">
                    <div class="ticket-wrapper">

                        <span class="ticket-name">First Last Name</span><br/>
                        <span class="">Date </span> <span class="ticket-status">Dot Icons green/yellow/red</span>
                        <span class="ticket-subject"><a href="#">subject goes here</a></span>
                        
                    </div><!-- ticket-wrapper -->
				</div><!-- card-body -->
			</div><!-- card -->
        </div><!-- col-12 -->
        @endforeach

	</div><!-- row -->

	<div class="pagination-wrapper">

	</div>

	<!-- REMOVE THIS WHEN YOU FIGURE OUT YOUR NPM PROBLEM -->
	<style>
		.right {
			text-align: right;
		}
	</style>
	
@endsection
