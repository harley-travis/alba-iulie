<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">

        <title>Job Page</title>

        <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    </head>
    <body>
        @foreach($job as $job)
            <div class="container-fluid">
                <div class="container">
                    <div class="left-container">
                        <header class="job-title">
                            <h1>{{$job->title}}</h1>
                            <h3>{{$job->company_name}}</h3>
                            <h4>{{$job->location}}</h4>
                        </header>
                    </div><!-- left-container -->
                    <div class="right-container">
                        <div class="company-logo-container">
                            <div class="company-logo-wrapper">
                                <img src="#" alt="#" class="company-logo">
                            </div>
                        </div>
                        <div class="job-data-container">
                            <div class="job-data-wrapper">

                            </div>
                        </div>
                    </div><!-- right-container -->
                </div>
            </div>
        @endforeach
    </body>
</html>