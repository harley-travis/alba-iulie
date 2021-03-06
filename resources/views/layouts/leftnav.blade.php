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
                  <a class="waves-effect waves-dark" href="{{ route('dashboard.overview') }}" aria-expanded="false"><i class="fas fa-tachometer-alt nav-icon"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                @if(auth()->user()->permissions >= 2)
                <li> 
                  <a class="waves-effect waves-dark" href="{{ route('jobs.overview') }}" aria-expanded="false"><i class="fas fa-briefcase nav-icon"></i><span class="hide-menu">Positions</span></a>
                </li>
                <li> 
                  <a class="waves-effect waves-dark" href="{{ route('applicants.overview') }}" aria-expanded="false"><i class="fas fa-users nav-icon"></i><span class="hide-menu">Applicants</span></a>
                </li>
                @endif
                <li> 
                  <a class="waves-effect waves-dark" href="{{ route('employees.overview') }}" aria-expanded="false"><i class="fas fa-address-book"></i><span class="hide-menu">Employee Directory</span></a>
                </li>
                @if(auth()->user()->permissions >= 2)
                <li> 
                  <a class="waves-effect waves-dark" href="{{ route('reports.overview') }}" aria-expanded="false"><i class="fas fa-chart-line nav-icon"></i><span class="hide-menu">Reports</span></a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->