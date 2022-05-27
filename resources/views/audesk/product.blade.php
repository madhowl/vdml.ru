@extends('audesk.layout')

@section('content')


    <div class="blog-details-area pt-100 pb-70">
        <div class="blog-details-shape">
            <img src="assets/img/blog-details-shape.png" alt="Blog Details">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @yield('product')


                    <div class="blog-details-item">
                        <div class="blog-details-img">
                            <img src="assets/img/blog-details-one.jpg" alt="Blog Details">
                        </div>
                        <div class="blog-details-head">
                            <h2></h2>
                            <p></p>
                        </div>
                        <div class="blog-details-nav">
                            <ul>
                                <li>
                                    <a href="#">Previous</a>
                                </li>
                                <li>
                                    <a href="#">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-details-item">
                        <div class="blog-details-search">
                            <form>
                                <input type="text" class="form-control" placeholder="Search">
                                <button type="submit" class="btn search-btn">
                                    <i class='bx bx-search'></i>
                                </button>
                            </form>
                        </div>
                        <div class="blog-details-recent">
                            <h3>Recent Blogs</h3>
                            <div class="blog-details-inner">
                                <img src="assets/img/blog-details-four.jpg" alt="Blog Details">
                                <a href="#">Classic cars demand day by day increasing</a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxs-user'></i>
                                            Admin
                                        </a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-calendar'></i>
                                        Jan 03, 2020
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-details-inner">
                                <img src="assets/img/blog-details-five.jpg" alt="Blog Details">
                                <a href="#">New engine system will change car speed</a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxs-user'></i>
                                            Admin
                                        </a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-calendar'></i>
                                        Jan 04, 2020
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-details-inner">
                                <img src="assets/img/blog-details-six.jpg" alt="Blog Details">
                                <a href="#">Next genaration auto will change the world</a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxs-user'></i>
                                            Admin
                                        </a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-calendar'></i>
                                        Jan 05, 2020
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-details-category">
                            <h3>Category</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        Engineering Strategy
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Modern  Autos
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Newest Parts
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        System Service
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Washing Service
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        New Motor Service
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-details-gallery">
                            <h3>Photo Gallery</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/gallery/1.jpg" alt="Blog Details">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/gallery/2.jpg" alt="Blog Details">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/gallery/3.jpg" alt="Blog Details">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/gallery/4.jpg" alt="Blog Details">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/gallery/5.jpg" alt="Blog Details">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/gallery/6.jpg" alt="Blog Details">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/gallery/7.jpg" alt="Blog Details">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/gallery/8.jpg" alt="Blog Details">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-details-tag">
                            <h3>Tags</h3>
                            <ul>
                                <li>
                                    <a href="#">UX/UI</a>
                                </li>
                                <li>
                                    <a href="#">Web</a>
                                </li>
                                <li>
                                    <a href="#">App</a>
                                </li>
                                <li>
                                    <a href="#">Design</a>
                                </li>
                                <li>
                                    <a href="#">Business</a>
                                </li>
                                <li>
                                    <a href="#">SEO</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
