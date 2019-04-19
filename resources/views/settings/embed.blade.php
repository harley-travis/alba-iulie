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
                <li class="breadcrumb-item">Settings</li>
                <li class="breadcrumb-item active">Embed Job Postings</li>
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
                    <h3>Embed Jobs Postings On Your Site</h3>
                    <p>Let's embed job postings on your website. There are only step steps!</p>

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
            </div>
        </div>

        <div class="col-12">
            <div class="card">
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
    
    <style>
        xmp {
            color: red;
            background-color: #fafafa;
            -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
        }
    </style>

@endsection
