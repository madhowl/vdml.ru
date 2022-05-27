<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/meanmenu.css')}}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/boxicons.min.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.theme.default.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/magnific-popup.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/animate.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/responsive.css')}}">

    <title>Audeck - Auto Service and Car Repair HTML Template</title>

    <link rel="icon" type="image/png" href="{{asset('/assets/img/favicon.png')}}">
    <!--== Livewire CSS ==-->
    <livewire:styles />
</head>

<body>
<!-- Preloader -->
<div class="loader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader -->

<!-- Start Navbar Area -->
@include('audesk.parts.navbar')
<!-- End Navbar Area -->

<!-- Page Title -->
@include('audesk.parts.title')
<!-- End Page Title -->

<!-- Content Grid -->
@yield('content')
<!-- End Content Grid  -->

<!-- Footer -->
@include('audesk.parts.footer')
<!-- End Footer -->


<!-- Essential JS -->
<script src="{{asset('/assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('/assets/js/popper.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<!-- Meanmenu JS -->
<script src="{{asset('/assets/js/jquery.meanmenu.js')}}"></script>
<!-- Mixitup JS -->
<script src="{{asset('/assets/js/jquery.mixitup.min.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
<!-- Magnific Popup JS -->
<script src="{{asset('/assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Form Ajaxchimp JS -->
<script src="{{asset('/assets/js/jquery.ajaxchimp.min.js')}}"></script>
<!-- Form Validator JS -->
<script src="{{asset('/assets/js/form-validator.min.js')}}"></script>
<!-- Contact JS -->
<script src="{{asset('/assets/js/contact-form-script.js')}}"></script>
<!-- Wow JS -->
<script src="{{asset('/assets/js/wow.min.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('/assets/js/custom.js')}}"></script>
<!--=== Livewire Js ===-->
<livewire:scripts />
</body>
</html>
