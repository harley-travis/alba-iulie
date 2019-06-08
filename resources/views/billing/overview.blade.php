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
		<div class="col-12">
			<div class="card">
				<div class="card-body">

					<h2 class="text-themecolor py-4">Enter Payment</h2>
					
					<form action="{{ route('billing.subscribe') }}" method="post" id="payment-form">
						<div class="form-row">
							<div class="col">
								<label for="card-element">
									Credit or debit card
								</label>
								<div id="card-element"></div>
							</div>

							<!-- Used to display form errors. -->
							<div id="card-errors" role="alert"></div>
						</div>

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button class="col btn btn-primary">Submit Payment</button>
					</form>

				</div>
			</div>
		</div>
	</div><!-- row -->

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">

				<h2 class="text-themecolor py-4">Add Credit Card</h2>
					
					<form action="{{ route('billing.createCard') }}" method="post" id="payment-form">

						<div class="form-row">
							<div class="col">
								<input type="text" class="form-control" placeholder="Number" name="number">
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<input type="text" class="form-control" placeholder="Month" name="month">
							</div>
							<div class="col">
								<input type="text" class="form-control" placeholder="Year" name="year">
							</div>
							<div class="col">
								<input type="text" class="form-control" placeholder="CVC" name="cvc">
							</div>
						</div>

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button class="col btn btn-primary">Add Card</button>
					</form>

				</div>
			</div>
		</div>
	</div><!-- row -->

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">

				<h2 class="text-themecolor py-4">Add ACH</h2>
				<small>At this time, we only support ACH accounts in the United States.</small>
				<span>NOTE: You must verify your ACH account before you can use it. Follow the instructions below:</span>
				<ul>
					<li>2 small deposits will be deposited into your account in 1-2 business days. The statement will say AMTS.</li>
					<li>You will need to verify those amounts.</li>
					<li>There is a limit of 10 attempts.</li>
				</ul>
					
					<form action="{{ route('billing.createACH') }}" method="post" id="payment-form">

						<div class="form-row">
							<div class="col">
								<input type="text" class="form-control" placeholder="name on account" name="account_holder_name">
							</div>
							<div class="col">
								<input type="password" class="form-control" placeholder="routing number" name="routing_number">
							</div>
							<div class="col">
								<input type="password" class="form-control" placeholder="account number">
							</div>
							<div class="col">
								<input type="password" class="form-control" placeholder="confirm account number" name="account_number">
							</div>
							<div class="col">
								<input type="text" class="form-control" placeholder="account holder type: IE: company" name="account_holder_type">
							</div>
						</div>

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button class="col btn btn-primary">Add ACH</button>
					</form>

				</div>
			</div>
		</div>
	</div><!-- row -->

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">

					<h2 class="text-themecolor py-4">Payment Information</h2>

					@foreach( $cards as $card)

					****{{ $card->last4 }}
					{{ $card->brand }}

					@endforeach

				</div>
			</div>
		</div>
	</div><!-- row -->

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">

					<h2 class="text-themecolor py-4">Billing Information</h2>


				</div>
			</div>
		</div>
	</div><!-- row -->




	<script type="application/javascript">

		// Grab API key
		var apiKey = '{{ env('STRIPE_KEY') }}';

		// Create a Stripe client.
		var stripe = Stripe(apiKey);

		// Create an instance of Elements.
		var elements = stripe.elements();

		// Custom styling can be passed to options when creating an Element.
		// (Note that this demo uses a wider set of styles than the guide below.)
		var style = {
			base: {
				color: '#32325d',
				fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
				fontSmoothing: 'antialiased',
				fontSize: '16px',
				'::placeholder': {
				color: '#aab7c4'
				}
			},
			invalid: {
				color: '#fa755a',
				iconColor: '#fa755a'
			}
		};

		// Create an instance of the card Element.
		var card = elements.create('card', {style: style});

		// Add an instance of the card Element into the `card-element` <div>.
		card.mount('#card-element');

		// Handle real-time validation errors from the card Element.
		card.addEventListener('change', function(event) {
			var displayError = document.getElementById('card-errors');
			if (event.error) {
				displayError.textContent = event.error.message;
			} else {
				displayError.textContent = '';
			}
		});

		// Handle form submission.
		var form = document.getElementById('payment-form');
		form.addEventListener('submit', function(event) {
			event.preventDefault();

			stripe.createToken(card).then(function(result) {
				if (result.error) {
					// Inform the user if there was an error.
					var errorElement = document.getElementById('card-errors');
					errorElement.textContent = result.error.message;
				} else {
					// Send the token to your server.
					stripeTokenHandler(result.token);
				}
			});
		});

		// Submit the form with the token ID.
		function stripeTokenHandler(token) {
			// Insert the token ID into the form so it gets submitted to the server
			var form = document.getElementById('payment-form');
			var hiddenInput = document.createElement('input');
			hiddenInput.setAttribute('type', 'hidden');
			hiddenInput.setAttribute('name', 'stripeToken');
			hiddenInput.setAttribute('value', token.id);
			form.appendChild(hiddenInput);

			// Submit the form
			form.submit();
		}

	</script>

@endsection
