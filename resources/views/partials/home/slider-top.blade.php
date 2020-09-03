@if (isset($slides) && count($slides) > 0)
    <div class="home-banner">
        <div class="home-slider">
            @foreach ($slides as $slide)
                <div class="slide" style="background-image:url('{{$slide}}')"></div>
            @endforeach
        </div>
        <div class="home-slider-controls d-flex justify-content-center">
            @foreach ($slides as $slide)
                <div class="indicator"></div>
            @endforeach
        </div>
        <div class="home-banner-content">
            <p class="text-complementary">Design and order your new kitchen online today</p>
            <h1 class="main-heading">Bespoke & made to measure handmade kitchen design</h1>
            <a href="#" class="btn btn-mtc-primary" title="Order now">Order now</a>
        </div>
    </div>
@endif