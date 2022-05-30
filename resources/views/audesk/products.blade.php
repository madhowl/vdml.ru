@extends('audesk.layout')
@section('title')
    @include('audesk.parts.title',['page_title'=>session()->get('page_title')])
@endsection
@section('content')
    <section class="blog-area blog-area-two pt-100">
        <div class="container">
            <div class="row">
                @foreach( $catalog as $item)
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-top">
                            <a href="/product/{{$item->slug}}">
                                <img src="{{$item->image}}" alt="{{$item->name}}">
                            </a>
                        </div>
                        <div class="blog-bottom">
                            <h3>
                                <a href="/product/{{$item->slug}}">
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
