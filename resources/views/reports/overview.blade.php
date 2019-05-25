@extends('layouts.master')

@section('content')
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-themecolor">Reports</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item active">Reports</li>
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
					
					<!-- Load the VueJS -->
					<reports-component></reports-component>

				</div>
			</div>
		</div>
	</div><!-- row -->
	

@endsection
