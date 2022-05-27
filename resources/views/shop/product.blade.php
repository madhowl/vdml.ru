@extends('layout.main')

@section('title', 'Page Title')

@section('breadcrumb')
    @parent
    <div class="page-header-content">
        <nav class="breadcrumb-area">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="breadcrumb-sep">/</li>
                <li>Product</li>
            </ul>
        </nav>
        <h4 class="title">Product</h4>
    </div>
@endsection

@section('sidebar')
    @parent

    <livewire:show-category />

    {{--    @include('shop.parts.sidebar')--}}
@endsection

@section('content')
{{--    @include('shop.parts.single-product')--}}
@endsection
