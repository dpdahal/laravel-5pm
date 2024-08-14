@extends('frontend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('frontend.components.banner-component')
        </div>
        <div class="col-md-12">
            @include('frontend.components.news-component')
        </div>
    </div>
@endsection
