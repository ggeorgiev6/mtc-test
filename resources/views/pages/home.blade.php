@extends('layouts.home')

@section('slider')
    @include('partials.home.slider-top', [
        'slides' => [
            secure_asset('/images/banner/home-slider-1.jpg'),
            secure_asset('/images/banner/home-slider-2.jpg')
        ]
    ])
@endsection

@section('content')
    @include('partials.home.intro')
@endsection