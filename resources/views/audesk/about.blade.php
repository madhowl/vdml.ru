@extends('audesk.layout')

@section('title')
    @include('audesk.parts.title',['page_title'=>session()->get('page_title')])
@endsection

@section('content')
    <!-- Banner -->
    <div class="banner-area banner-area-two">
        <div class="banner-img">
            <img src="assets/img/home-one/banner-car-two.png" alt="Banner">
            <img src="{{asset('/image/790x580.png')}}" alt="Banner">
        </div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="banner-text">
                        <h1>ООО "ВЛАДМЕТАЛЛ"</h1>
                        <p>Наша компания занимается специализированными поставками высокотехнологичного оборудования для пищевых производств различных отраслей промышленности. </p><p> Основными направлениями нашей компании является оборудование для выдува ПЭТ бутылок, оборудование розлива питьевой газированной воды, напитков, широкая линейка фасовочно-упаковочного оборудования, оборудование для пищевых производств, цехов и многое другое.</p>

                        <div class="cmn-btn">
                            <a class="banner-btn-left" href="{{route ('catalog')}}">
                                <i class='bx bx-meteor'></i>
                                Перейти в каталог
                            </a>
                            <a class="banner-btn-right" href="tel:+79502902950">
                                <i class='bx bx-phone-call' ></i>
                                8(950)290-29-50 (отдел продаж)
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Address -->
    <div class="address-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="address-item">
                        <i class='bx bxs-paper-plane'></i>
                        <h3>Адрес: </h3>
                        <span>Владивосток, Толстого 30 офис 303</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="address-item">
                        <i class='bx bxs-phone-call'></i>
                        <h3>Позвоните нам</h3>
                        <a href="tel:+0755543332322">8(423)207-87-52</a>
                        <a href="tel:+0525543452892">8(950)290-29-50</a>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="address-item address-one">
                        <i class='bx bxs-time-five'></i>
                        <h3>Время работы</h3>
                        <span>Ежедневно</span>
                        <span>с 10:00 до 18.00 </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Address -->





    <!-- Quality -->
    <section class="quality-area quality-area-two">
        <div class="quality-img">
            <img src="assets/img/home-one/quality-shape.png" alt="Quality">
            <img src="assets/img/home-one/quality-shape.png" alt="Quality">
            <img src="{{asset('/image/450x550.png')}}" alt="Quality">
        </div>
        <div class="container">
            <div class="quality-content">
                <div class="section-title">
                    <h2>Качественная работа – наш главный приоритет</h2>
                    <p>  В зависимости от Ваших потребностей, мы подберём наиболее соответствующее по техническим характеристикам и наиболее приемлемое по цене оборудование. </p>
                    <p>Мы специализируется как на поставках комплексных линий, так и на продаже отдельных технологических единиц оборудования. </p>

                </div>
                <div class="cmn-btn">
                    <a class="banner-btn-left" href="about.html">
                        Read More
                    </a>
                </div>
                <img src="assets/img/home-one/tyre.png" alt="Quality">
            </div>
        </div>
    </section>
    <!-- End Quality -->


    <!-- Feature -->
    <div class="feature-area">
        <div class="feature-shape">
            <img src="assets/img/home-one/feature-shape.png" alt="Feature">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="feature-img">
                        <img src="{{asset('/image/pererabotka-selhozproduktsii.jpg')}}" alt="Feature">
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="feature-content">
                        <h2>Наши особенности</h2>
                        <ul>
                            <li>
                                <i class='bx bx-box'></i>
                                <h3>Надежная и качественная работа</h3>
                                <p>Покупая в нашей компании, Вы заключаете договор с Российской компанией, имеете полный пакет официальных документов. </p>
                            </li>
                            <li>
                                <i class='bx bxs-truck'></i>
                                <h3>Качественное предоставление услуг</h3>
                                <p>Оборудование сопровождается на всём сроке эксплуатации</p>
                            </li>
                            <li>
                                <i class='bx bx-money'></i>
                                <h3>Только проверенные производители</h3>
                                <p>Мы осуществим поставку любых запасных частей и техническую поддержку</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Feature -->





    <!-- Review -->
    <div class="review-area">
        <div class="review-shape">
            <img src="assets/img/home-one/review/review-shape.png" alt="Review">
        </div>
        <div class="video-wrap">
            <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
                <i class='bx bx-play'></i>
            </a>
        </div>
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-lg-6 ptb-100">
                    <div class="review-slider owl-theme owl-carousel">
                        <div class="review-item">
                            <i class='bx bxs-quote-right'></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                            <div class="review-inner">
                                <img src="assets/img/home-one/review/reviewer-one.png" alt="Review">
                                <h3>Sarah Tylor</h3>
                                <span>Designer</span>
                            </div>
                        </div>
                        <div class="review-item">
                            <i class='bx bxs-quote-right'></i>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            <div class="review-inner">
                                <img src="assets/img/home-one/review/reviewer-one.png" alt="Review">
                                <h3>Tom Henry</h3>
                                <span>CEO</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="review-bg">
                        <img src="assets/img/home-one/review/review-right.jpg" alt="Review">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Review -->

    <!-- Pricing -->
    <section class="pricing-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">pricing</span>
                <h2>Our Pricing Plan</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="pricing-item">
                        <div class="pricing-top">
                            <h3>Basic Pack</h3>
                            <p><span class="dollar">$</span>39<span class="month">/month</span></p>
                        </div>
                        <div class="pricing-middle">
                            <i class='bx bx-rocket'></i>
                        </div>
                        <div class="pricing-bottom">
                            <ul>
                                <li>
                                    <i class='bx bx-check-circle'></i>
                                    Up to 3 chat operators
                                </li>
                                <li>
                                    <i class='bx bx-check-circle'></i>
                                    200 ChatBot Triggers
                                </li>
                                <li>
                                    <i class='bx bx-check-circle'></i>
                                    Quick Responses
                                </li>
                                <li>
                                    <i class='bx bx-check-circle'></i>
                                    Google Analytics
                                </li>
                                <li>
                                    <i class='bx bx-check-circle'></i>
                                    Messenger Integration
                                </li>
                                <li>
                                    <i class='bx bx-x'></i>
                                    Email Integration
                                </li>
                                <li>
                                    <i class='bx bx-x'></i>
                                    Mobile + Desktop Apps
                                </li>
                                <li>
                                    <i class='bx bx-x'></i>
                                    Drag & Drop Widgets
                                </li>
                            </ul>
                            <div class="cmn-btn">
                                <a class="banner-btn-left" href="#">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="pricing-item">
                        <div class="pricing-top">
                            <h3>Standard Pack</h3>
                            <p><span class="dollar">$</span>69<span class="month">/month</span></p>
                        </div>
                        <div class="pricing-middle">
                            <i class='bx bx-rocket'></i>
                        </div>
                        <div class="pricing-bottom">
                            <ul>
                                <li>
                                    <i class='bx bx-check-circle'></i>
                                    Up to 3 chat operators
                                </li>
                                <li>
                                    <i class='bx bx-check-circle'></i>
                                    200 ChatBot Triggers
                                </li>
                                <li>
                                    <i class='bx bx-check-circle'></i>
                                    Quick Responses
                                </li>
                                <li>
                                    <i class='bx bx-check-circle'></i>
                                    Google Analytics
                                </li>
                                <li>
                                    <i class='bx bx-check-circle'></i>
                                    Messenger Integration
                                </li>
                                <li>
                                    <i class='bx bx-check-circle'></i>
                                    Email Integration
                                </li>
                                <li>
                                    <i class='bx bx-x'></i>
                                    Mobile + Desktop Apps
                                </li>
                                <li>
                                    <i class='bx bx-x'></i>
                                    Drag & Drop Widgets
                                </li>
                            </ul>
                            <div class="cmn-btn">
                                <a class="banner-btn-left" href="#">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="pricing-item">
                        <div class="pricing-top">
                            <h3>Premium Pack</h3>
                            <p><span class="dollar">$</span>99<span class="month">/month</span></p>
                        </div>
                        <div class="pricing-middle">
                            <i class='bx bx-rocket'></i>
                        </div>
                        <div class="pricing-bottom">
                            <ul>
                                <li>
                                    <i class='bx bx-check-circle'></i>
                                    Up to 3 chat operators
                                </li>
                                <li>
                                    <i class='bx bx-check-circle'></i>
                                    200 ChatBot Triggers
                                </li>
                                <li>
                                    <i class='bx bx-check-circle'></i>
                                    Quick Responses
                                </li>
                                <li>
                                    <i class='bx bx-check-circle'></i>
                                    Google Analytics
                                </li>
                                <li>
                                    <i class='bx bx-check-circle'></i>
                                    Messenger Integration
                                </li>
                                <li>
                                    <i class='bx bx-check-circle'></i>
                                    Email Integration
                                </li>
                                <li>
                                    <i class='bx bx-check-circle'></i>
                                    Mobile + Desktop Apps
                                </li>
                                <li>
                                    <i class='bx bx-check-circle'></i>
                                    Drag & Drop Widgets
                                </li>
                            </ul>
                            <div class="cmn-btn">
                                <a class="banner-btn-left" href="#">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing -->

    <!-- Blog -->
    <section class="blog-area pt-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">blog</span>
                <h2>Our Latest Blogs</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-top">
                            <div class="blog-date">
                                <p>21</p>
                                <span>Feb</span>
                            </div>
                            <a href="blog-details.html">
                                <img src="assets/img/home-one/blog/1.jpg" alt="Blog">
                            </a>
                        </div>
                        <div class="blog-bottom">
                            <h3>
                                <a href="blog-details.html">The next genaration IT will change the world</a>
                            </h3>
                            <ul>
                                <li>
                                    <img src="assets/img/home-one/blog/1.png" alt="Blog">
                                    <a href="#">Aikin Ward</a>
                                </li>
                                <li>
                                    <a href="blog-details.html">Read More
                                        <i class='bx bx-chevron-right'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-top">
                            <div class="blog-date">
                                <p>22</p>
                                <span>Feb</span>
                            </div>
                            <a href="blog-details.html">
                                <img src="assets/img/home-one/blog/2.jpg" alt="Blog">
                            </a>
                        </div>
                        <div class="blog-bottom">
                            <h3>
                                <a href="blog-details.html">Content writing demand day by day increasing</a>
                            </h3>
                            <ul>
                                <li>
                                    <img src="assets/img/home-one/blog/2.png" alt="Blog">
                                    <a href="#">Tom Smith</a>
                                </li>
                                <li>
                                    <a href="blog-details.html">Read More
                                        <i class='bx bx-chevron-right'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-top">
                            <div class="blog-date">
                                <p>23</p>
                                <span>Feb</span>
                            </div>
                            <a href="blog-details.html">
                                <img src="assets/img/home-one/blog/3.jpg" alt="Blog">
                            </a>
                        </div>
                        <div class="blog-bottom">
                            <h3>
                                <a href="blog-details.html">Don't buy a tech gift until you read these rules image</a>
                            </h3>
                            <ul>
                                <li>
                                    <img src="assets/img/home-one/blog/1.png" alt="Blog">
                                    <a href="#">Sarah Tylor</a>
                                </li>
                                <li>
                                    <a href="blog-details.html">Read More
                                        <i class='bx bx-chevron-right'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="parts-view">
                <a href="blog.html">View All</a>
            </div>
        </div>
    </section>
    <!-- End Blog -->

@endsection
