@extends('audesk.layout')

@section('content')
    <section class="blog-area blog-area-two pt-100">
        <div class="container">
            <div class="row">
                @foreach( $catalog as $item)
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-top">
                            <a href="#">
                                <img src="{{$item->image}}" alt="{{$item->name}}">
                            </a>
                        </div>
                        <div class="blog-bottom">
                            <h3>
                                <a href="#">{{$item->name}}</a>
                            </h3>
                            <ul>
                                <li>
                                    <a href="#">Read More
                                        <i class='bx bx-chevron-right'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
