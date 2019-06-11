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
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<h4 class="alert-heading">Success!</h4>
			<p>{{ Session::get('info') }}</p>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
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

					<h3>Credit Cards</h3>
					<ul class="list-group">
						@foreach( $cards as $card )
						<li class="list-group-item">
							<span class="col-6">
							
								@if($card->brand == 'Visa')
									<i class="fab fa-cc-visa pr-1"></i>
								@elseif($card->brand == 'MasterCard')
									<i class="fab fa-cc-mastercard pr-1"></i>
								@elseif($card->brand == 'Discover')
									<i class="fab fa-cc-discover pr-1"></i>
								@elseif($card->brand == 'American Express')
									<i class="fab fa-cc-amex pr-1"></i>
								@endif
							
							{{ $card->brand }} <span class="pl-3">****{{ $card->last4 }}</span></span>

							@if($card->id == $customer->default_source)
								<span class="badge badge-primary">Default</span>
							@endif

							<span class="col-6 float-right text-right">
								<a href="{{ route('billing.setDefault', ['id' => $card->id ]) }}" class="text-primary">Set Default</a>  
								<a href="{{ route('billing.editCard', ['id' => $card->id ]) }}" class="text-info"><i class="fas fa-edit"></i></a>  
								<a href="{{ route('billing.destroyCard', ['id' => $card->id ]) }}" class="text-danger"><i class="far fa-trash-alt"></i></a>
							</span>
						</li>
						@endforeach
					</ul>

					<h3>ACH Accounts</h3>
					<ul class="list-group">
						@foreach( $bank_accounts as $bank_account )
						<li class="list-group-item">
							<span class="col-6">
							<i class="fas fa-university"></i> {{ $bank_account->bank_name }}
								<span class="pl-3">**** {{ $bank_account->last4 }} </span>
							</span>
							@if($bank_accounts->id == $customer->default_source)
								<span class="badge badge-primary">Default</span>
							@endif
							<span class="col-6 float-right text-right">
								<a href="{{ route('billing.setDefault', ['id' => $bank_account->id ]) }}" class="text-primary">Set Default</a>
								<a href="{{ route('billing.destroyACH', ['id' => $bank_account->id ]) }}" class="text-danger"><i class="far fa-trash-alt"></i></a>
							</span>
						</li>
						@endforeach 

					<div class="mt-5">
						<a href="{{ route('billing.payment') }}" class="btn btn-primary">Add Payment Methods</a>
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
								<td scope="row">{{ \Carbon\Carbon::createFromTimestamp($invoice->created)->subDays(1)->toFormattedDateString() }}</td>
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
