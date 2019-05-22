@include('layouts.header')

@include('layouts.topbar')

@include('layouts.leftnav')

<div id="app">
    <div class="page-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div><!-- End Container fluid  -->

        <!-- footer -->
        <footer class="footer"><span class="copyright">&copy; <?php echo date('Y'); ?> WhiteJuly.com | All Rights Reserved </footer>
        <!-- End footer -->

    </div><!-- page-wrapper -->
</div><!-- #app -->

@include('layouts.footer')