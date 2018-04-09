<!-- <div class="">
    <div class="">
      <div class="">
        <nav class="">
          <a class="" href="{{ route('dashboard.overview') }}"><i class="material-icons">home</i> Dashboard</a>
          <a class="" href="{{ route('applicants.overview') }}"><i class="material-icons">people</i> Applicants</a>
          <a class="" href="{{ route('jobs.overview') }}"><i class="material-icons">work</i> Positions</a>
          <a class="" href="{{ route('employees.overview') }}"><i class="material-icons">assignment_ind</i> Employees</a>
          <a class="" href=""><i class="material-icons">schedule</i> Exit Interview</a>
          <a class="" href="{{ route('reports.overview') }}"><i class="material-icons">assessment</i> Reports</a>
        </nav>
      </div>
    </div>
</div> -->

<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" href="{{ route('dashboard.overview') }}"><i class="material-icons">home</i> Dashboard</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('applicants.overview') }}"><i class="material-icons">people</i> Applicants</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('jobs.overview') }}"><i class="material-icons">work</i> Positions</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('employees.overview') }}"><i class="material-icons">assignment_ind</i> Employees</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><i class="material-icons">schedule</i> Exit Interview</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('reports.overview') }}"><i class="material-icons">assessment</i> Reports</a>
  </li>
</ul>