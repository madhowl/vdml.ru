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
<footer class="footer-area-two pt-100">
    <div class="footer-img">
        <img src="assets/img/home-one/footer-car.png" alt="Footer">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img src="assets/img/logo-two.png" alt="Logo">
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam nobis et praesentium architecto ex laudantium voluptates in dolore</p>
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-service">
                        <h3>Services</h3>
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bx-chevron-right'></i>
                                    Automobile
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bx-chevron-right'></i>
                                    Tyre Service
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bx-chevron-right'></i>
                                    Repair Service
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bx-chevron-right'></i>
                                    Engine Service
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bx-chevron-right'></i>
                                    System Service
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-service">
                        <h3>Quick Links</h3>
                        <ul>
                            <li>
                                <a href="index.html" target="_blank">
                                    <i class='bx bx-chevron-right'></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="about.html" target="_blank">
                                    <i class='bx bx-chevron-right'></i>
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="blog.html" target="_blank">
                                    <i class='bx bx-chevron-right'></i>
                                    Blogs
                                </a>
                            </li>
                            <li>
                                <a href="engineer.html" target="_blank">
                                    <i class='bx bx-chevron-right'></i>
                                    Team
                                </a>
                            </li>
                            <li>
                                <a href="testimonial.html" target="_blank">
                                    <i class='bx bx-chevron-right'></i>
                                    Testimonials
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-service footer-find">
                        <h3>Find Us</h3>
                        <ul>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                28/A Street, New York City
                            </li>
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <a href="tel:+880123456789">
                                    +88 0123 456 789
                                </a>
                            </li>
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <a href="tel:+880563246378">
                                    +88 0563 246 378
                                </a>
                            </li>
                            <li>
                                <i class='bx bx-mail-send'></i>
                                <a href="mailto:info@audeck.com">
                                    info@audeck.com
                                </a>
                            </li>
                            <li>
                                <i class='bx bx-mail-send'></i>
                                <a href="mailto:hello@audeck.com">
                                    hello@audeck.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="row">
                <div class="col-lg-7">
                    <div class="copyright-item">
                        <p>Copyright ©2021 Audeck. Designed By <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="copyright-item copyright-right">
                        <ul>
                            <li>
                                <a href="terms-and-conditions.html" target="_blank">Terms & Conditions</a>
                            </li>
                            <li>
                                <span>-</span>
                            </li>
                            <li>
                                <a href="privacy-policy.html" target="_blank">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
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
</body>
</html>
