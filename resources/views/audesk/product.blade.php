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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
