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


	<script type="application/javascript">

		// USING THE SCRIPT HERE TO PULL IN THE API KEY

		var apiKey = '{{ env('STRIPE_KEY') }}';

		// Create a Stripe client.
		var stripe = Stripe(apiKey);
		console.log(apiKey)

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
