@extends('layout.cart')

@section('title', 'Page Title')

@section('breadcrumb')
    @parent
    <div class="page-header-content">
        <nav class="breadcrumb-area">
            <ul class="breadcrumb">
                <li><a href="/shop">Home</a></li>
                <li class="breadcrumb-sep">/</li>
                <li>Cart</li>
            </ul>
        </nav>
        <h4 class="title">Cart</h4>
    </div>
@endsection



@section('content')
    @include('shop.parts.cart')
@endsection
