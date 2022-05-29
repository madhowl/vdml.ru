@extends('audesk.layout')
@section('title')
    @parent
@endsection
@section('content')
    <section class="blog-area blog-area-two pt-100">
        <div class="container">
            <div class="row">
                @foreach( $catalog as $item)
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-top">
                            <a href="/category/{{$item->slug}}">
                                <img src="{{$item->image}}" alt="{{$item->name}}">
                            </a>
                        </div>
                        <div class="blog-bottom">
                            <h3>
                                <a href="/category/{{$item->slug}}">
                                    {{$item->name}}
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
