<md-app-drawer md-permanent="clipped">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
      <div class="mdl-layout__drawer">
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="{{ route('dashboard.overview') }}"><i class="material-icons">home</i> Dashboard</a>
          <a class="mdl-navigation__link" href="{{ route('applicants.overview') }}"><i class="material-icons">people</i> Applicants</a>
          <a class="mdl-navigation__link" href="{{ route('jobs.overview') }}"><i class="material-icons">work</i> Positions</a>
          <a class="mdl-navigation__link" href="{{ route('employees.overview') }}"><i class="material-icons">assignment_ind</i> Employees</a>
          <a class="mdl-navigation__link" href=""><i class="material-icons">schedule</i> Exit Interview</a>
          <a class="mdl-navigation__link" href="{{ route('reports.overview') }}"><i class="material-icons">assessment</i> Reports</a>
        </nav>
      </div>
      <main class="mdl-layout__content">
        <div class="page-content"><!-- Your content goes here --></div>
      </main>
    </div>
</md-app-drawer>