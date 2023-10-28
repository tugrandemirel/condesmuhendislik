<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.header')

<!-- body start -->
<body class="loading" data-layout-color="dark"  data-layout-mode="default" data-layout-size="fluid" data-topbar-color="dark" data-leftbar-position="fixed" data-leftbar-color="dark" data-leftbar-size='default' data-sidebar-user='true'>

<!-- Begin page -->
<div id="wrapper">


   @include('admin.layouts.navbar')

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                @if(session()->has('success'))
                <x-alert type="success">{{ session()->get('success') }}</x-alert>
                @endif
                @if(session()->has('error'))
                <x-alert type="error">{{ session()->get('error') }}</x-alert>
                @endif
                @yield('content')
            </div> <!-- container-fluid -->

        </div> <!-- content -->

        <!-- Footer Start -->
        @include('admin.layouts.footer')
        <!-- end Footer -->

    </div>
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Vendor -->
<script src="{{ asset('assets/admin/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/feather-icons/feather.min.js') }}"></script>

<!-- knob plugin -->
<script src="{{ asset('assets/admin/libs/jquery-knob/jquery.knob.min.js') }}"></script>

<!-- Dashboar init js-->
<script src="{{ asset('assets/admin/js/pages/dashboard.init.js') }}"></script>

<!-- App js-->
<script src="{{ asset('assets/admin/js/app.min.js') }}"></script>
@yield('js')
</body>
</html>
