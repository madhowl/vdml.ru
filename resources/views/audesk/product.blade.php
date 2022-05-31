@extends('audesk.layout')

@section('title')
    @include('audesk.parts.title',['page_title'=>session()->get('page_title')])
@endsection

@section('content')
    <div class="service-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    @yield('product')
                </div>
                <div class="col-lg-3">
                    <div class="service-details-item">
                        <div class="service-details-left">
                            <h3>Категории</h3>
                            <livewire:category />
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
