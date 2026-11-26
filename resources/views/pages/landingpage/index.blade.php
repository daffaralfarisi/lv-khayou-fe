@extends('layouts.main')

@section('content')
        <div class="stricky-header stricked-menu main-menu">
                <div class="sticky-header__content"></div>
        </div>

        @include('pages.landingpage.slider')
        @include('pages.landingpage.product')
        @include('pages.landingpage.banner_large')
        @include('pages.landingpage.why_khayou')
        @include('pages.landingpage.setup_with_catalog')
        @include('pages.landingpage.video')
        @include('pages.landingpage.testimonial')

@endsection

