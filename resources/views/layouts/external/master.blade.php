@include('layouts.external.header')

<div class="login-wrapper">
    <div class="container-fluid">
        @yield('content')
    </div><!-- End Container fluid  -->

    <!-- footer -->
    <footer class="external-footer"><span class="copyright">&copy; <?php echo date('Y'); ?> WhiteJuly.com | All Rights Reserved </footer>
    <!-- End footer -->

</div><!-- login-wrapper -->

@include('layouts.external.footer')