@extends('layouts.master')

@section('content')
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-themecolor">Settings</h3>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item"><a href="{{ route('settings.overview') }}">Settings Overview</a></li>
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
                    <h2 class="text-themecolor">Company Settings</h2>
                    
					<form action="{{ route('settings.company') }}" method="POST" enctype="multipart/form-data">

						<div class="form-group">
							<label for="company_name">Company Name</label>
							<input type="text" class="form-control" name="company_name">
						</div>	

						<div class="form-group">
							<label for="company_bio">Example textarea</label>
   							<textarea class="form-control" name="company_bio" rows="5"></textarea>
							<small class="form-text text-muted">
								This description will be displayed on job posts.
							</small>
						</div>	

						<div class="current-logo">
							<img src="{{ $company->logo }}" class="current-logo" alt="company-logo" />
							<small class="form-text text-muted">
								Current logo
							</small>
						</div><br/>

						<div class="form-group">
							<label for="logo">Upload Logo</label>
							<input type="file" class="form-control-file" id="logo" name="logo">
						</div>

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button type="submit" class="btn btn-success">Save Settings</button>

					</form>
                    
				</div>
			</div>
        </div>
	</div><!-- row -->

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
                    <h2 class="text-themecolor">Embed Jobs Postings On Your Site</h2>
                    <p>Let's embed job postings on your website. There are only step steps!</p><br/>

                    <h4>Step 1</h4>
                    <p>Paste this code on your website where you would like your job postings to appear.</p>
                    <small>We style the postings with Bootstrap. If you do not have Bootstrap. This will not effect the styling of your code.</small><br/>
                    <small><i class="fa fa-exclamation-triangle" style="color:red"></i> DO NOT remove or alter the class name.</small>
                    <div class="code-bg">
                        <xmp>
    <div id="wj-app" class="wj-{{$company->id}}"></div>
                        </xmp>
                    </div>
				</div>
				<div class="card-body">
                    <h4>Step 2</h4>
                    <p>Paste this JavaScript file right above the closing /body tag.</p>
                    <small><i class="fa fa-exclamation-triangle" style="color:red"></i> You must have Jquery installed on your website.</small>
                    <div class="code-bg">
                        <xmp>
    <script src="http://localhost:8000/js/scripts/1.0.0/whitejuly.js"></script>
                        </xmp>
                    </div>
				</div>
			</div>
        </div>
	</div><!-- row -->
	
@endsection
