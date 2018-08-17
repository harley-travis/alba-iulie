@include('job_portal.header')
@if(Session::has('info'))
		<div class="alert alert-success" role="alert">
			<h4 class="alert-heading">Success!</h4>
			<p>{{ Session::get('info') }}</p>
		</div>
	@endif
@foreach($job as $job)
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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#apply">Apply</button>
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
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#apply">Apply</button>
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
                        <form action="{{ route('apply.job') }}" method="POST">
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
                                    <label for="resume">Upload Resume</label>
                                    <input type="file" class="form-control-file" id="resume">
                                </div>

                                <input type="hidden" name="job_id" id="job_id" value="{{ $job->id }}">
                                <input type="hidden" name="companies_id" id="companies_id" value="{{ $job->companies_id }}">

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
            
            @endforeach
@include('job_portal.footer')