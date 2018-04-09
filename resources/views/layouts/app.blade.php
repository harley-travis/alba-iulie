@include('layouts.header')

        <div id="app">
            <div class="header-bar black-4-bg white">
                <div class="">
                    <div class="logo">
                        <span class="nav-logo">White July</span>
                    </div>
                    <div class="usernav">
                        @include('layouts.usermenu')
                    </div>
                </div>
            </div>
            <div class="leftnav gray-3-bg">
                @include('layouts.leftnav')
            </div>

            <div class="content">

                @yield('content')

                <div class="body-footer">
                    <span class="copyright"><?php echo date('Y'); ?> &copy; WhiteJuly.com | All Rights Reserved</span>
                </div>
            </div>
             
        </div><!-- #app -->

@include('layouts.footer')