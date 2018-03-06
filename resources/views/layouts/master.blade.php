<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>White July</title>

        <!-- css -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
        <link href="{{ URL::to('css/app.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>


        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
                    mdl-layout--fixed-header">
          <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
              <div class="mdl-layout-spacer"></div>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                          mdl-textfield--floating-label mdl-textfield--align-right">
                <label class="mdl-button mdl-js-button mdl-button--icon"
                       for="fixed-header-drawer-exp">
                  <i class="material-icons">search</i>
                </label>
                <div class="mdl-textfield__expandable-holder">
                  <input class="mdl-textfield__input" type="text" name="sample"
                         id="fixed-header-drawer-exp">
                </div>
              </div>
            </div>
          </header>
          <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">White July</span>
            <nav class="mdl-navigation">
              <a class="mdl-navigation__link" href="{{ route('dashboard.overview') }}">Dashboard</a>
              <a class="mdl-navigation__link" href="{{ route('applicants.overview') }}">Applicants</a>
              <a class="mdl-navigation__link" href="{{ route('jobs.overview') }}">Positions</a>
              <a class="mdl-navigation__link" href="{{ route('employees.overview') }}">Employees</a>
              <a class="mdl-navigation__link" href="{{ route('reports.overview') }}">Reports</a>
            </nav>
          </div>
          <main class="mdl-layout__content">
            <div class="page-content">
              
              @yield('content')
              
              </div>
          </main>
        </div>
        
        

    			


		<footer>
            <span class="copyright"><?php echo date('Y'); ?> &copy; WhiteJuly.com | All Rights Reserved</span>
		</footer>
        
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    </body>
</html>
