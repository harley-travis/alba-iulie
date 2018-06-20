<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> 
                  <a class="waves-effect waves-dark" href="{{ route('dashboard.overview') }}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li> 
                  <a class="waves-effect waves-dark" href="{{ route('applicants.overview') }}" aria-expanded="false"><i class="fa fa-user-circle-o"></i><span class="hide-menu">Applicants</span></a>
                </li>
                <li> 
                  <a class="waves-effect waves-dark" href="{{ route('jobs.overview') }}" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Positions</span></a>
                </li>
                <li> 
                  <a class="waves-effect waves-dark" href="{{ route('employees.overview') }}" aria-expanded="false"><i class="fa fa-smile-o"></i><span class="hide-menu">Employees</span></a>
                </li>
                <li> 
                  <a class="waves-effect waves-dark" href="{{ route('reports.overview') }}" aria-expanded="false"><i class="fa fa-globe"></i><span class="hide-menu">Reports</span></a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->