<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Products :: Julie – Minimal Fashion Bootstrap 5 Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{asset('/assets/img/favicon.ico')}}" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,500i,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,600,700" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--== Headroom CSS ==-->
    <link href="{{asset('/assets/css/headroom.css')}}" rel="stylesheet" />
    <!--== Animate CSS ==-->
    <link href="{{asset('/assets/css/animate.css')}}" rel="stylesheet" />
    <!--== Ionicons CSS ==-->
    <link href="{{asset('/assets/css/ionicons.css')}}" rel="stylesheet" />
    <!--== Material Icon CSS ==-->
    <link href="{{asset('/assets/css/material-design-iconic-font.css')}}" rel="stylesheet" />
    <!--== Elegant Icon CSS ==-->
    <link href="{{asset('/assets/css/elegant-icons.css')}}" rel="stylesheet" />
    <!--== Font Awesome Icon CSS ==-->
    <link href="{{asset('/assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="{{asset('/assets/css/swiper.min.css')}}" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="{{asset('/assets/css/fancybox.min.css')}}" rel="stylesheet" />
    <!--== Slicknav Min CSS ==-->
    <link href="{{asset('/assets/css/slicknav.css')}}" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--== Livewire CSS ==-->
    <livewire:styles />
</head>

<body>

<!--wrapper start-->
<div class="wrapper">

    <!--== Start Preloader Content ==-->
    <div class="preloader-wrap">
        <div class="preloader">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!--== End Preloader Content ==-->

    <!--== Start Header Wrapper ==-->
    <header class="header-area sticky-header header-default">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-sm-4 col-lg-3">
                    <div class="header-logo-area">
                        @include('shop.parts.logo')
                    </div>
                </div>
                <div class="col-sm-4 col-lg-7 d-none d-lg-block">
                    <div class="header-navigation-area">
                        @include('shop.parts.navigation')
                    </div>
                </div>
                <div class="col-sm-7 col-lg-2 d-none d-sm-block text-end">

                    <div class="header-action-area">
                        @include('shop.parts.header-action')
                    </div>
                </div>
                <div class="col-6 col-sm-1 d-block d-lg-none text-end">
                    <button class="btn-menu" type="button"><i class="zmdi zmdi-menu"></i></button>
                </div>
            </div>
        </div>
    </header>
    <!--== End Header Wrapper ==-->

    <main class="main-content">
        <!--== Start Page Header Area Wrapper ==-->
        <div class="page-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        @yield('breadcrumb')

                    </div>
                </div>
            </div>
        </div>
        <!--== End Page Header Area Wrapper ==-->

        <!--== Start Product Area Wrapper ==-->
        <section class="product-area product-inner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        @yield('content')
                    </div>
                    <div class="col-lg-3">
                        <!--== Start Product Sidebar Wrapper ==-->
                        <div class="product-sidebar-wrapper">
                            <!--== Start Product Sidebar Item ==-->
                            @yield('sidebar')
                            <!--== End Sidebar Item ==-->
                        </div>
                        <!--== End Product Sidebar Wrapper ==-->
                    </div>
                </div>
            </div>
        </section>
        <!--== End Product Area Wrapper ==-->
    </main>

    <!--== Start Footer Area Wrapper ==-->
    <footer class="footer-area">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <!--== Start widget Item ==-->
                        <div class="widget-item">
                            <div class="about-widget">
                                <div class="footer-logo-area">
                                    <a href="index.html">
                                        <img class="logo-main" src="assets/img/logo.png" alt="Logo" />
                                    </a>
                                </div>
                                <p class="desc">Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididun ut labore gthydolore.</p>
                                <ul>
                                    <li><i class="ion-ios7-location-outline"></i> 184 Main Rd E, St Albans VIC 3021,</li>
                                    <li><i class="ion-ios7-email-outline"></i> <a href="mailto://info@example.com">info@example.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--== End widget Item ==-->
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <!--== Start widget Item ==-->
                        <div class="widget-item widget-item-one">
                            <h4 class="widget-title">INFORMATION</h4>
                            <div class="widget-menu-wrap">
                                <ul class="nav-menu">
                                    <li><a href="shop.html">Specials</a></li>
                                    <li><a href="shop.html">New products</a></li>
                                    <li><a href="shop.html">Top sellers</a></li>
                                    <li><a href="shop.html">Our stores</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--== End widget Item ==-->
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <!--== Start widget Item ==-->
                        <div class="widget-item widget-item-two">
                            <h4 class="widget-title">QUICK LINKS</h4>
                            <div class="widget-menu-wrap">
                                <ul class="nav-menu">
                                    <li><a href="login.html">New User</a></li>
                                    <li><a href="about-us.html">Help Center</a></li>
                                    <li><a href="about-us.html">Refund Policy</a></li>
                                    <li><a href="about-us.html">Report Spam</a></li>
                                    <li><a href="login.html">Account</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--== End widget Item ==-->
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <!--== Start widget Item ==-->
                        <div class="widget-item">
                            <h4 class="widget-title">newsletter</h4>
                            <div class="widget-newsletter">
                                <p>Sign up for our newsletter & promotions</p>
                                <div class="newsletter-form">
                                    <form>
                                        <input type="email" class="form-control" placeholder="email@example.com">
                                        <button class="btn-submit" type="button">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--== End widget Item ==-->
                    </div>
                </div>
            </div>

        </div>
        <!--== Start Footer Bottom ==-->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="copyright">© 2021, <span>Julie</span>. Made with <i class="fa fa-heart icon-heart"></i> by <a target="_blank" href="https://themeforest.net/user/codecarnival/portfolio"> Codecarnival</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Footer Bottom ==-->
    </footer>
    <!--== End Footer Area Wrapper ==-->

    <!--== Scroll Top Button ==-->
    <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-double-up"></span></div>

    <!--== Start Quick View Menu ==-->
    <aside class="product-quick-view-modal">
        <div class="product-quick-view-inner">
            <div class="product-quick-view-content">
                <button type="button" class="btn-close">
                    <span class="close-icon"><i class="fa fa-close"></i></span>
                </button>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="thumb">
                            <img src="assets/img/shop/quick-view1.jpg" alt="Alan-Shop">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="content">
                            <h4 class="title">Meta Slevless Dress</h4>
                            <div class="prices">
                                <del class="price-old">$85.00</del>
                                <span class="price">$70.00</span>
                            </div>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
                            <div class="quick-view-select">
                                <div class="quick-view-select-item">
                                    <label for="forSizes" class="form-label">Size:</label>
                                    <select class="form-select" id="forSizes" required>
                                        <option selected value="">s</option>
                                        <option>m</option>
                                        <option>l</option>
                                        <option>xl</option>
                                    </select>
                                </div>
                                <div class="quick-view-select-item">
                                    <label for="forColors" class="form-label">Color:</label>
                                    <select class="form-select" id="forColors" required>
                                        <option selected value="">red</option>
                                        <option>green</option>
                                        <option>blue</option>
                                        <option>yellow</option>
                                        <option>white</option>
                                    </select>
                                </div>
                            </div>
                            <div class="action-top">
                                <div class="pro-qty">
                                    <input type="text" id="quantity4" title="Quantity" value="1" />
                                </div>
                                <button class="btn btn-black">Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas-overlay"></div>
    </aside>
    <!--== End Quick View Menu ==-->

    <!--== Start Side Menu ==-->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-inner">
            <div class="off-canvas-overlay"></div>
            <!-- Start Off Canvas Content Wrapper -->
            <div class="off-canvas-content">
                <!-- Off Canvas Header -->
                <div class="off-canvas-header">
                    <div class="close-action">
                        <button class="btn-menu-close">menu <i class="fa fa-chevron-left"></i></button>
                    </div>
                </div>

                <div class="off-canvas-item">
                    <!-- Start Mobile Menu Wrapper -->
                    <div class="res-mobile-menu menu-active-one">
                        <!-- Note Content Auto Generate By Jquery From Main Menu -->
                    </div>
                    <!-- End Mobile Menu Wrapper -->
                </div>
            </div>
            <!-- End Off Canvas Content Wrapper -->
        </div>
    </aside>
    <!--== End Side Menu ==-->
</div>

<!--=======================Javascript============================-->

<!--=== jQuery Modernizr Min Js ===-->
<script src="{{asset('/assets/js/modernizr.js')}}"></script>
<!--=== jQuery Min Js ===-->
<script src="{{asset('/assets/js/jquery-main.js')}}"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="{{asset('/assets/js/jquery-migrate.js')}}"></script>
<!--=== jQuery Popper Min Js ===-->
<script src="{{asset('/assets/js/popper.min.js')}}"></script>
<!--=== jQuery Bootstrap Min Js ===-->
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<!--=== jQuery Headroom Min Js ===-->
<script src="{{asset('/assets/js/headroom.min.js')}}"></script>
<!--=== jQuery Swiper Min Js ===-->
<script src="{{asset('/assets/js/swiper.min.js')}}"></script>
<!--=== jQuery Fancybox Min Js ===-->
<script src="{{asset('/assets/js/fancybox.min.js')}}"></script>
<!--=== jQuery Slick Nav Js ===-->
<script src="{{asset('/assets/js/slicknav.js')}}"></script>
<!--=== jQuery Countdown Js ===-->
<script src="{{asset('/assets/js/countdown.js')}}"></script>

<!--=== jQuery Custom Js ===-->
<script src="{{asset('/assets/js/custom.js')}}"></script>

<!--=== Livewire Js ===-->
<livewire:scripts />
</body>

</html>
