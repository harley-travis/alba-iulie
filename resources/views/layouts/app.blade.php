@include('layouts.header')

        <div id="app">
            <div class="page-container">
                <md-app>
                    <md-app-toolbar class="md-primary md-app-toolbar ">
                        <header class="mdl-layout__header">
                            <div class="mdl-layout__header-row">
                                <span class="mdl-layout-title logo-font">White July</span>

                                <!-- Add spacer, to align navigation to the right -->
                                <div class="mdl-layout-spacer"></div>
                               
                                <!-- usermenu -->
                                @include('layouts.usermenu')
                                
                            </div>
                        </header>
                    </md-app-toolbar>

                    <!-- left nav -->
                    @include('layouts.leftnav')

                    <md-app-content>
                        <div class="content-display">
                            <!-- all content will be pass here -->
                            @yield('content')

                            <div class="body-footer">
                                <span class="copyright"><?php echo date('Y'); ?> &copy; WhiteJuly.com | All Rights Reserved</span>
                            </div>
                        </div>
                    </md-app-content>
                </md-app>
              </div>
        </div><!-- #app -->

@include('layouts.footer')