<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">

        <title>@foreach($company as $company){{$company->name}}@endforeach | @foreach($job as $job){{ $job->title }}@endforeach</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="{{ asset('css/portal.css') }}" rel="stylesheet">
        
    </head>
    <body>

    @if(Session::has('info'))
		<div class="alert alert-success" role="alert">
			<h4 class="alert-heading">Success!</h4>
			<p>{{ Session::get('info') }}</p>
		</div>
    @endif
    
        <div class="container-fluid">
            <div class="container">
                <div class="left-container">
                    <header class="job-title">
                        <h1>{{$job->title}}</h1>
                        <h3>{{$job->company_name}}</h3>
                        <h4>{{$job->location}}</h4>
                    </header>
                    <section class="job-section">
                        <h2 class="section-title">Description</h2>
                        <p>{{$job->description}}</p>
                    </section>
                    <section class="job-section">
                        <h2 class="section-title">What You'll Do</h2>
                        <p>{{$job->work}}</p>
                    </section>
                    <section class="job-section">
                        <h2 class="section-title">Qualifications</h2>
                        <p>{{$job->qualifications}}</p>
                    </section>
                    <section class="job-section">
                        <h2 class="section-title">Preferred Skills</h2>
                        <p>{{$job->skills}}</p>
                    </section>
                    <section class="job-section">
                        <h2 class="section-title">About {{$job->company_name}}</h2>
                        <p>{{$job->bio}}</p>
                    </section>
                    <div class="bottom-cta">
                        <a href="#" class="btn btn-secondary">See More Jobs</a>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#apply">Apply</button>
                    </div>
                </div><!-- left-container -->
                <div class="right-container">
                    <div class="company-logo-container">
                        <div class="company-logo-wrapper">
                            <img src="{{ '/images/logos/avengers-logo.png' }}" alt="#" class="company-logo">
                        </div>
                    </div>
                    <div class="job-data-container">
                        <div class="job-data-wrapper">
                            <div class="sidebar-cta">
                                <a href="#" class="btn btn-secondary">See More Jobs</a>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#apply">Apply</button>
                            </div>
                            <div class="job-info">
                                <ul>
                                    <li>{{$job->compensationAmount}}</li>
                                    <li>{{$job->duration}}</li>
                                    <li>Close Date {{$job->closeDate}}</li>
                                </ul>
                            </div>
                            <div class="wj-tag">
                                <span>Powered by <span class="wj-minor">White July</span></span>
                            </div>
                        </div>
                    </div>
                </div><!-- right-container -->
            </div>
        </div>

        <!-- modal -->
        <div class="modal fade" id="apply" tabindex="-1" role="dialog" aria-labelledby="applylLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('apply.job') }}" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title" id="applyLabel">Apply to {{ $job->title }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="first_name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="last_name" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phone" placeholder="Phone Number">
                            </div>

                            <div class="form-group">
                                Your Gender<br>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="gender" name="gender" class="custom-control-input" value="0">
                                    <label class="custom-control-label" for="gender">Female</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="gender" name="gender" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="gender">Male</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="gender" name="gender" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="gender">Choose not to Identify</label>
                                </div>
                            </div>

                            <div class="form-group">
                                What Ethnicity Are You?
                                <select class="custom-select" name="ethnicity">
                                    <option selected>Select One</option>
                                    <option value="0">American Indian or Alaska Native</option>
                                    <option value="1">Asian</option>
                                    <option value="2">Black or African American</option>
                                    <option value="3">Hispanic or Latino</option>
                                    <option value="4">Native Hawaiian or Other Pacific Islander</option>
                                    <option value="5">White</option>
                                    <option value="6">Other</option>
                                    <option value="7">Choose not to Identify</option>
                                </select>
                            </div>

                            <div class="form-group">     
                                Are you Veteran?<br>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="veteran" name="veteran" class="custom-control-input" value="0">
                                    <label class="custom-control-label" for="veteran" >No</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="veteran" name="veteran" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="veteran" >Yes</label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                Are you Disabled?<br>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="disability" name="disability" class="custom-control-input" value="0">
                                    <label class="custom-control-label" for="disability">No</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="disability" name="disability" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="disability">Yes</label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="resume">Upload Resume</label>
                                <input type="file" class="form-control-file" id="resume" name="resume">
                            </div>

                            <input type="hidden" name="job_id" value="{{ $job->id }}">
                         
                            <input type="hidden" name="company_id" value="{{ $company->id }}">
                            
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Apply</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    </body>
</html>