@extends('layouts.master')

@section('content')
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-themecolor">Billing</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item">Settings</li>
				<li class="breadcrumb-item active">Billing</li>
			</ol>
		</div>
		<div class="col-md-7 align-self-center text-right">
			
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
		<div class="col-6">
			<div class="card">
				<div class="card-body">

					<h2 class="text-themecolor py-4">Plan Information</h2>
					<span>Monthly plan Annual plan</span><br />
					<span>Renews automatically 1st of each month</span><br />
					<span>Next payment scheduled for 
						@foreach( $subscriptions as $subscription ) 
							<strong>{{ \Carbon\Carbon::createFromTimestamp($subscription->current_period_end)->subDays(1)->toFormattedDateString() }}</strong>
						@endforeach
					</span><br />
					<small>Need to cancel? Call us at 1-800-555-1234.</small>

					<!-- current plan and other plan options 
						 and button to CHANGE PLAN
						 for now, for cancellations have them call in.
						 build out later
					-->

					<div class="mt-5">
						<a href="{{ route('billing.plan') }}" class="btn btn-primary">Change Plan</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-6">
			<div class="card">
				<div class="card-body">

					<h2 class="text-themecolor py-4">Payment Information</h2>

					<ul class="list-group">
						@foreach( $cards as $card )
						<li class="list-group-item">{{ $card->brand }} ****{{ $card->last4 }}</li>
						@endforeach
					</ul>

					<div class="mt-5">
						<a href="{{ route('billing.payment') }}" class="btn btn-primary">Manage Payments</a>
					</div>

				</div>
			</div>
		</div>
	</div><!-- row -->

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">

					<h2 class="text-themecolor py-4">Billing Information</h2>

					<table class="table table-borderless">
						<thead>
							<tr>
								<th scope="col">Date</th>
								<th scope="col">Type</th>
								<th scope="col">Amount</th>
								<th scope="col">Paid</th>
								<th scope="col">Receipt</th>
							</tr>
						</thead>
						<tbody>
							@foreach( $invoices as $invoice )
							<tr>
								<th scope="row">{{ \Carbon\Carbon::createFromTimestamp($invoice->created)->subDays(1)->toFormattedDateString() }}</th>
								<td>Invoice</td>
								<td>${{ $invoice->amount_paid / 100 }}</td>
								<td>
									@if($invoice->attempted == 1)
										<span class="text-success">Success</span>
									@else
										<span class="text-danger">Failed</span>
									@endif
								</td>
								<td><a href="{{ $invoice->invoice_pdf }}" target="_blank">View PDF</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div><!-- row -->

@endsection
