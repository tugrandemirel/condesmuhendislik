<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="keywords"
          content="Construction, Factory, elementor, engineering, Technology, online bussines, Ecommerce, Shop">
    <meta name="description"
          content="Factry - Factory and Industry Service HTML5 Template for all kinds of Construction,Factory,elementor, engineering, Technology, online bussines, Ecommerce, Shop,website">
    <title>Factry - Factory and Industry Service HTML5 Template</title>
    <meta property="og:site_name" content="Factry">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Factry - Factory and Industry Service HTML5 Template">
    <meta name='og:image' content='images/assets/ogg.png'>
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#913BFF">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#913BFF">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#913BFF">

    <!-- <link rel="manifest" href="site.webmanifest" /> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/fonts/bootstrap-icons/font-css.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/metisMenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/spacing.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/main.css') }}" />
</head>

<body>
<div class="main-page-wrapper">
    <!--[if lte IE 9]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif]-->

    <!-- Add your site or application content here -->
    <!-- preloader -->



    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->

    <!-- offcanvas end  -->

    @include('front.layouts.header')


    <main>
        @yield('content')
    </main>
    @include('front.layouts.footer')
</div>

<!-- JS here -->

<script src="{{ asset('assets/front/js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('assets/front/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assets/front/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('assets/front/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/front/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/front/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/front/js/aos.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('assets/front/js/plugins.js') }}"></script>


<!--Custom JS here -->
<script src="{{ asset('assets/front/js/main.js') }}"></script>


</body>

</html>
