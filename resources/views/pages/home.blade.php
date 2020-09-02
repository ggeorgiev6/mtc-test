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
    @include('partials.home.testimonials', [
        'testimonials' =>  [
             (object)
                ['message' => 'Since my first contact I have received a very high level of customer service and advice with my kitchen plans. Ben responded very quickly to all of my emails and delivery of the kitchen was as planned.',
                'user' => 'Jane, Dundee']
            ,
             (object)
                ['message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget est sit amet sapien venenatis maximus vel in urna. Nam mauris arcu, feugiat in finibus vitae, sollicitudin id purus.',
                'user' => 'Mark, Dundee']
            
        ]
    ])
    @include('partials.home.gallery')
@endsection