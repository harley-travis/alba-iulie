@include('job_portal.header')
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
                            <a href="#" class="btn btn-success">Apply</a>
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
                                    <a href="#" class="btn btn-success">Apply</a>
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
            @endforeach
@include('job_portal.footer')