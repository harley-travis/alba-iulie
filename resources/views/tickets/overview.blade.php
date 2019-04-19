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

						<span class="ticket-status">
							@if( $ticket->status === 1 )
								<span class="status bg-warning"></span>
							@elseif( $ticket->status === 2 )
								<span class="status bg-success"></span>
							@else
								<span class="status bg-primary"></span>
							@endif		
						</span>
                        <span class="ticket-name">{{ $ticket->name }}</span> | <span class="ticket-date"> {{ $ticket->created_at }} </span> <br/><br/>
						
                        <span class="ticket-subject"><a href="{{ route('tickets.view', ['id' => $ticket->id ]) }}">{{ $ticket->subject }}</a></span>
                        
                    </div><!-- ticket-wrapper -->
				</div><!-- card-body -->
			</div><!-- card -->
        </div><!-- col-12 -->
        @endforeach

	</div><!-- row -->

	<div class="pagination-wrapper">
		{!! $tickets->links() !!}
	</div>

	<!-- REMOVE THIS WHEN YOU FIGURE OUT YOUR NPM PROBLEM -->
	<style>
		.status {
			height: 10px;
			width: 10px;
			border-radius: 50%;
			display: inline-block;
			margin-right: 20px;
		}

		.ticket-subject {
			margin-left: 35px;
		}

		.right {
			text-align: right;
		}
	</style>
	
@endsection
