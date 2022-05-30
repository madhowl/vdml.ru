@extends('audesk.layout')

@section('title')
    @include('audesk.parts.title',['page_title'=>session()->get('page_title')])
@endsection

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
                            <livewire:category />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
