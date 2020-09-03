@extends('layouts.home')

@section('slider')
    @include('partials.home.slider-top', [
        'slides' => [
            secure_asset('/images/banner/home-slider-1.jpg'),
            secure_asset('/images/banner/home-slider-2.jpg'),
            secure_asset('/images/banner/home-slider-3.jpg')
        ]
    ])
@endsection

@section('content')
    @include('partials.home.intro')
    @include('partials.home.testimonials', [
        'testimonials' =>  [
             (object)
                ['message' => 'Since my first contact I have received a very high level of customer service and advice with my kitchen plans. Ben responded very quickly to all of my emails and delivery of the kitchen was as planned.',
                'user' => 'Jane, Dundee'],
             (object)
                ['message' => 'Since my first contact I have received a very high level of customer service and advice with my kitchen plans. Ben responded very quickly to all of my emails and delivery of the kitchen was as planned.',
                'user' => 'Mark, Dundee']
            
        ]
    ])
    @include('partials.home.gallery', [
        'photos' => [
            (object)
                ['img_sm' => secure_asset('/images/gallery/gallery-1.jpg'),
                'img_lg' => secure_asset('/images/gallery/gallery-1-lg.jpg')],
            (object)
                ['img_sm' => secure_asset('/images/gallery/gallery-2.jpg'),
                'img_lg' => secure_asset('/images/gallery/gallery-2-lg.jpg')],
            (object)
                ['img_sm' => secure_asset('/images/gallery/gallery-3.jpg'),
                'img_lg' => secure_asset('/images/gallery/gallery-3-lg.jpg')],
            (object)
                ['img_sm' => secure_asset('/images/gallery/gallery-4.jpg'),
                'img_lg' => secure_asset('/images/gallery/gallery-4-lg.jpg')],
        ]
    ])
@endsection